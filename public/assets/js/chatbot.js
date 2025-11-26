/**
 chatbot 
 */

class FixMyRideChatbot {
    constructor() {
        // Configuration from Blade
        this.config = window.chatbotConfig || {};
        this.csrfToken = this.config.csrfToken;
        this.messageRoute = this.config.messageRoute;
        this.isAuthenticated = this.config.isAuthenticated;
        this.userName = this.config.userName;
        this.userRole = this.config.userRole;

        // Storage key
        this.storageKey = 'fixmyride_chat_history';
        
        // DOM Elements
        this.container = document.getElementById('chatbot-container');
        this.toggleBtn = document.getElementById('chatbot-toggle');
        this.chatWindow = document.getElementById('chatbot-window');
        this.messagesContainer = document.getElementById('chatbot-messages');
        this.form = document.getElementById('chatbot-form');
        this.input = document.getElementById('chatbot-input');
        this.sendBtn = document.getElementById('chatbot-send');
        this.micBtn = document.getElementById('chatbot-mic');
        this.minimizeBtn = document.getElementById('chatbot-minimize');
        this.clearBtn = document.getElementById('chatbot-clear');
        this.notification = document.getElementById('chatbot-notification');

        // State
        this.isOpen = false;
        this.isProcessing = false;
        this.messageHistory = [];

        // Initialize
        this.init();
    }

    init() {
        if (!this.container) {
            console.error('Chatbot container not found');
            return;
        }

        // Load chat history
        this.loadChatHistory();

        // Attach event listeners
        this.attachEventListeners();

        // Show welcome message if no history
        if (this.messageHistory.length === 0) {
            this.showWelcomeMessage();
        } else {
            this.renderChatHistory();
        }
    }

    attachEventListeners() {
        // Toggle chat window
        this.toggleBtn.addEventListener('click', () => this.toggleChat());
        this.minimizeBtn.addEventListener('click', () => this.toggleChat());

        // Send message
        this.form.addEventListener('submit', (e) => {
            e.preventDefault();
            this.sendMessage();
        });

        // Enter key to send
        this.input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                this.sendMessage();
            }
        });

        // Clear chat history
        this.clearBtn.addEventListener('click', () => this.clearChatHistory());

        // Microphone button (placeholder for future implementation)
        this.micBtn.addEventListener('click', () => {
            this.showMessage('Voice input feature coming soon! 🎤', 'bot');
        });

        // Close on Escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && this.isOpen) {
                this.toggleChat();
            }
        });
    }

    toggleChat() {
        this.isOpen = !this.isOpen;
        
        if (this.isOpen) {
            this.chatWindow.classList.add('show');
            this.toggleBtn.classList.add('active');
            this.input.focus();
            this.hideNotification();
            this.scrollToBottom();
        } else {
            this.chatWindow.classList.remove('show');
            this.toggleBtn.classList.remove('active');
        }
    }

    showWelcomeMessage() {
        const welcomeHTML = `
            <div class="welcome-message">
                <strong>👋 Welcome to FixMyRide!</strong>
                Hi ${this.userName}! I'm your AI assistant here to help you with:
                <br><br>
                🔧 Finding mechanics nearby<br>
                🚗 Car maintenance advice<br>
                💡 Platform features & guidance<br>
                📍 Location-based services
                <br><br>
                ${!this.isAuthenticated ? '💡 <em>Register to unlock all features!</em><br><br>' : ''}
                How can I assist you today?
            </div>
        `;
        this.messagesContainer.innerHTML = welcomeHTML;
    }

    renderChatHistory() {
        this.messagesContainer.innerHTML = '';
        this.messageHistory.forEach(msg => {
            this.appendMessage(msg.content, msg.type, msg.timestamp, false);
        });
        this.scrollToBottom();
    }

    async sendMessage() {
        const message = this.input.value.trim();

        if (!message || this.isProcessing) {
            return;
        }

        // Clear input immediately
        this.input.value = '';

        // Show user message
        const timestamp = new Date().toISOString();
        this.appendMessage(message, 'user', timestamp);
        this.saveMessage(message, 'user', timestamp);

        // Show typing indicator
        this.showTypingIndicator();
        this.isProcessing = true;
        this.sendBtn.disabled = true;

        try {
            // Send to backend
            const response = await fetch(this.messageRoute, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': this.csrfToken,
                    'Accept': 'application/json',
                },
                body: JSON.stringify({ message })
            });

            const data = await response.json();

            // Remove typing indicator
            this.hideTypingIndicator();

            if (data.success && data.message) {
                // Show bot response
                const botTimestamp = new Date().toISOString();
                this.appendMessage(data.message, 'bot', botTimestamp);
                this.saveMessage(data.message, 'bot', botTimestamp);

                // Show notification if chat is closed
                if (!this.isOpen) {
                    this.showNotification();
                }
            } else {
                this.showError(data.message || 'Failed to get response. Please try again.');
            }

        } catch (error) {
            console.error('Chatbot error:', error);
            this.hideTypingIndicator();
            this.showError('Network error. Please check your connection and try again.');
        } finally {
            this.isProcessing = false;
            this.sendBtn.disabled = false;
            this.input.focus();
        }
    }

    appendMessage(content, type, timestamp, saveToHistory = true) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `message ${type}`;

        const time = this.formatTime(timestamp);
        
        messageDiv.innerHTML = `
            <div class="message-content">
                ${this.escapeHtml(content)}
                <div class="message-time">${time}</div>
            </div>
        `;

        this.messagesContainer.appendChild(messageDiv);
        this.scrollToBottom();

        if (saveToHistory) {
            this.saveMessage(content, type, timestamp);
        }
    }

    showTypingIndicator() {
        const typingDiv = document.createElement('div');
        typingDiv.className = 'message bot';
        typingDiv.id = 'typing-indicator';
        typingDiv.innerHTML = `
            <div class="typing-indicator">
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
                <div class="typing-dot"></div>
            </div>
        `;
        this.messagesContainer.appendChild(typingDiv);
        this.scrollToBottom();
    }

    hideTypingIndicator() {
        const typingIndicator = document.getElementById('typing-indicator');
        if (typingIndicator) {
            typingIndicator.remove();
        }
    }

    showError(message) {
        const errorDiv = document.createElement('div');
        errorDiv.className = 'error-message';
        errorDiv.textContent = message;
        this.messagesContainer.appendChild(errorDiv);
        this.scrollToBottom();

        // Auto-remove after 5 seconds
        setTimeout(() => errorDiv.remove(), 5000);
    }

    showMessage(content, type) {
        const timestamp = new Date().toISOString();
        this.appendMessage(content, type, timestamp);
    }

    saveMessage(content, type, timestamp) {
        this.messageHistory.push({ content, type, timestamp });
        
        // Keep only last 100 messages
        if (this.messageHistory.length > 100) {
            this.messageHistory = this.messageHistory.slice(-100);
        }

        this.saveChatHistory();
    }

    loadChatHistory() {
        try {
            const stored = localStorage.getItem(this.storageKey);
            if (stored) {
                this.messageHistory = JSON.parse(stored);
            }
        } catch (error) {
            console.error('Failed to load chat history:', error);
            this.messageHistory = [];
        }
    }

    saveChatHistory() {
        try {
            localStorage.setItem(this.storageKey, JSON.stringify(this.messageHistory));
        } catch (error) {
            console.error('Failed to save chat history:', error);
        }
    }

    clearChatHistory() {
        if (confirm('Are you sure you want to clear all chat history?')) {
            this.messageHistory = [];
            localStorage.removeItem(this.storageKey);
            this.messagesContainer.innerHTML = '';
            this.showWelcomeMessage();
        }
    }

    scrollToBottom() {
        requestAnimationFrame(() => {
            this.messagesContainer.scrollTop = this.messagesContainer.scrollHeight;
        });
    }

    formatTime(timestamp) {
        const date = new Date(timestamp);
        return date.toLocaleTimeString('en-US', { 
            hour: '2-digit', 
            minute: '2-digit' 
        });
    }

    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML.replace(/\n/g, '<br>');
    }

    showNotification() {
        this.notification.classList.add('show');
    }

    hideNotification() {
        this.notification.classList.remove('show');
    }
}

// Initialize chatbot when DOM is ready
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', () => {
        window.fixMyRideChatbot = new FixMyRideChatbot();
    });
} else {
    window.fixMyRideChatbot = new FixMyRideChatbot();
}