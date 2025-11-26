<!-- AI Chatbot Component -->
<div id="chatbot-container">
    <!-- Floating Chat Button -->
    <button id="chatbot-toggle" class="chatbot-toggle" aria-label="Open chat">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
        </svg>
        <span class="chatbot-notification" id="chatbot-notification"></span>
    </button>

    <!-- Chat Window -->
    <div id="chatbot-window" class="chatbot-window">
        <!-- Header -->
        <div class="chatbot-header">
            <div class="chatbot-header-info">
                <div class="chatbot-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <div>
                    <h3 class="chatbot-title">FixMyRide Assistant</h3>
                    <p class="chatbot-status">
                        <span class="status-dot"></span>
                        Online
                    </p>
                </div>
            </div>
            <div class="chatbot-actions">
                <button id="chatbot-clear" class="chatbot-action-btn" title="Clear chat history">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                    </svg>
                </button>
                <button id="chatbot-minimize" class="chatbot-action-btn" title="Minimize chat">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Messages Container -->
        <div id="chatbot-messages" class="chatbot-messages">
            <!-- Welcome message will be added by JS -->
        </div>

        <!-- Input Area -->
        <div class="chatbot-input-container">
            <form id="chatbot-form" class="chatbot-form">
                <input 
                    type="text" 
                    id="chatbot-input" 
                    class="chatbot-input" 
                    placeholder="Ask me anything about FixMyRide..."
                    autocomplete="off"
                    maxlength="1000"
                >
                <button type="button" id="chatbot-mic" class="chatbot-mic-btn" title="Voice input (coming soon)" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"></path>
                        <path d="M19 10v2a7 7 0 0 1-14 0v-2"></path>
                        <line x1="12" y1="19" x2="12" y2="23"></line>
                        <line x1="8" y1="23" x2="16" y2="23"></line>
                    </svg>
                </button>
                <button type="submit" id="chatbot-send" class="chatbot-send-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13"></line>
                        <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                    </svg>
                </button>
            </form>
            <div class="chatbot-footer-text">
                Powered by Groq AI
            </div>
        </div>
    </div>
</div>

<!-- Include CSS and JS -->
<link rel="stylesheet" href="{{ asset('assets/css/chatbot.css') }}">
<script src="{{ asset('assets/js/chatbot.js') }}" defer></script>

<!-- Pass CSRF token and route to JavaScript -->
<script>
    window.chatbotConfig = {
        csrfToken: '{{ csrf_token() }}',
        messageRoute: '{{ route('chatbot.message') }}',
        isAuthenticated: {{ auth()->check() ? 'true' : 'false' }},
        userName: '{{ auth()->check() ? auth()->user()->name : "Guest" }}',
        userRole: '{{ auth()->check() ? auth()->user()->role : "guest" }}'
    };
</script>