@extends('layouts.app')

@section('title', __('chatbot.title'))

@section('content')
<!-- Hero Section -->
<section class="py-10 bg-gradient-to-b from-cyan-50 to-white" style="padding-top: 100px;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        {{-- <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-4" data-aos="fade-up">
            <i class="fas fa-sparkles"></i>
            {{ __('chatbot.powered_by') }}
        </div> --}}
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3" data-aos="fade-up" data-aos-delay="100">
            {{ __('chatbot.title') }}
        </h1>
        <p class="text-gray-600 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
            {{ __('chatbot.page_description') }}
        </p>
    </div>
</section>

<!-- Chat Interface -->
<section class="pb-12">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 overflow-hidden border border-gray-100" data-aos="fade-up" data-aos-delay="300">
            <!-- Chat Header -->
            <div class="bg-cyan-600 p-5">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center">
                        <i class="fas fa-robot text-white text-xl"></i>
                    </div>
                    <div class="text-white">
                        <h3 class="font-bold">{{ __('chatbot.assistant_name') }}</h3>
                        <p class="text-sm text-cyan-100 flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                            {{ __('chatbot.online') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Chat Messages -->
            <div id="chat-messages" class="h-[450px] overflow-y-auto p-6 space-y-4 bg-gray-50/50">
                <!-- Welcome Message -->
                <div class="flex items-start gap-3">
                    <div class="w-9 h-9 rounded-xl bg-cyan-600 flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-robot text-white text-sm"></i>
                    </div>
                    <div class="bg-white rounded-2xl rounded-tl-none p-4 shadow-sm max-w-[85%] border border-gray-100">
                        <p class="text-gray-700 text-sm leading-relaxed">
                            {{ __('chatbot.welcome_message') }}
                        </p>
                        <ul class="mt-3 text-sm text-gray-600 space-y-1">
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-cyan-500 text-xs"></i>
                                {{ __('chatbot.topic1') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-cyan-500 text-xs"></i>
                                {{ __('chatbot.topic2') }}
                            </li>
                            <li class="flex items-center gap-2">
                                <i class="fas fa-check text-cyan-500 text-xs"></i>
                                {{ __('chatbot.topic3') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Quick Questions -->
            <div class="px-6 py-3 bg-white border-t border-gray-100">
                <div class="flex flex-wrap gap-2">
                    <button onclick="sendQuickQuestion(this)" class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-cyan-50 hover:text-cyan-600 transition-colors">
                        {{ __('chatbot.q1') }}
                    </button>
                    <button onclick="sendQuickQuestion(this)" class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-cyan-50 hover:text-cyan-600 transition-colors">
                        {{ __('chatbot.q2') }}
                    </button>
                    <button onclick="sendQuickQuestion(this)" class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-cyan-50 hover:text-cyan-600 transition-colors">
                        {{ __('chatbot.q3') }}
                    </button>
                    <button onclick="sendQuickQuestion(this)" class="px-3 py-1.5 bg-gray-100 text-gray-700 rounded-lg text-sm hover:bg-cyan-50 hover:text-cyan-600 transition-colors">
                        {{ __('chatbot.q4') }}
                    </button>
                </div>
            </div>
            
            <!-- Input Area -->
            <div class="p-4 bg-white border-t border-gray-100">
                <form id="chat-form" class="flex items-center gap-3">
                    <input 
                        type="text" 
                        id="user-input" 
                        class="flex-1 px-4 py-3 rounded-xl bg-gray-50 border border-gray-200 focus:border-cyan-500 focus:bg-white focus:ring-2 focus:ring-cyan-100 transition-all outline-none text-sm"
                        placeholder="{{ __('chatbot.placeholder') }}"
                        autocomplete="off"
                    >
                    <button type="submit" id="send-btn" class="w-12 h-12 rounded-xl bg-cyan-600 text-white flex items-center justify-center hover:bg-cyan-700 transition-colors disabled:bg-gray-300 disabled:cursor-not-allowed">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>
        </div>
        
        <!-- Disclaimer -->
        <div class="mt-4 p-4 bg-yellow-50 border border-yellow-100 rounded-xl" data-aos="fade-up" data-aos-delay="400">
            <p class="text-sm text-yellow-700 flex items-start gap-2">
                <i class="fas fa-info-circle mt-0.5 flex-shrink-0"></i>
                <span>
                    {{ __('chatbot.disclaimer') }}
                </span>
            </p>
        </div>
    </div>
</section>

<!-- Features -->
<section class="py-12 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-clock text-cyan-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">{{ __('chatbot.available') }}</h3>
                <p class="text-gray-600 text-sm">
                    {{ __('chatbot.available_desc') }}
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-cyan-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">{{ __('chatbot.reliable_info') }}</h3>
                <p class="text-gray-600 text-sm">
                    {{ __('chatbot.medical_guidelines') }}
                </p>
            </div>
            
            <div class="bg-white rounded-2xl p-6 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-14 h-14 rounded-2xl bg-cyan-100 flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-language text-cyan-600 text-xl"></i>
                </div>
                <h3 class="font-bold text-gray-900 mb-2">{{ __('chatbot.bilingual') }}</h3>
                <p class="text-gray-600 text-sm">
                    {{ __('chatbot.arabic_english') }}
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
const chatMessages = document.getElementById('chat-messages');
const chatForm = document.getElementById('chat-form');
const userInput = document.getElementById('user-input');
const sendBtn = document.getElementById('send-btn');

const lang = '{{ app()->getLocale() }}';
const csrfToken = '{{ csrf_token() }}';

function addMessage(text, isUser = false) {
    const messageDiv = document.createElement('div');
    messageDiv.className = 'flex items-start gap-3 ' + (isUser ? 'flex-row-reverse' : '');
    
    const avatar = isUser 
        ? '<div class="w-9 h-9 rounded-xl bg-gray-200 flex items-center justify-center flex-shrink-0"><i class="fas fa-user text-gray-600 text-sm"></i></div>'
        : '<div class="w-9 h-9 rounded-xl bg-cyan-600 flex items-center justify-center flex-shrink-0"><i class="fas fa-robot text-white text-sm"></i></div>';
    
    const bubbleClass = isUser 
        ? 'bg-cyan-600 text-white rounded-2xl rounded-tr-none'
        : 'bg-white rounded-2xl rounded-tl-none shadow-sm border border-gray-100';
    
    const textClass = isUser ? 'text-white' : 'text-gray-700';
    
    // Convert newlines to <br> and handle markdown-like formatting
    const formattedText = text
        .replace(/\n/g, '<br>')
        .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>')
        .replace(/\*(.*?)\*/g, '<em>$1</em>');
    
    messageDiv.innerHTML = `
        ${avatar}
        <div class="${bubbleClass} p-4 max-w-[85%]">
            <p class="${textClass} text-sm leading-relaxed">${formattedText}</p>
        </div>
    `;
    
    chatMessages.appendChild(messageDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function showTyping() {
    const typingDiv = document.createElement('div');
    typingDiv.id = 'typing-indicator';
    typingDiv.className = 'flex items-start gap-3';
    typingDiv.innerHTML = `
        <div class="w-9 h-9 rounded-xl bg-cyan-600 flex items-center justify-center flex-shrink-0">
            <i class="fas fa-robot text-white text-sm"></i>
        </div>
        <div class="bg-white rounded-2xl rounded-tl-none p-4 shadow-sm border border-gray-100">
            <div class="flex gap-1">
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></div>
                <div class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></div>
            </div>
        </div>
    `;
    chatMessages.appendChild(typingDiv);
    chatMessages.scrollTop = chatMessages.scrollHeight;
}

function hideTyping() {
    const typingDiv = document.getElementById('typing-indicator');
    if (typingDiv) typingDiv.remove();
}

function setLoading(loading) {
    sendBtn.disabled = loading;
    userInput.disabled = loading;
}

function sendQuickQuestion(button) {
    const question = button.textContent.trim();
    userInput.value = question;
    chatForm.dispatchEvent(new Event('submit'));
}

async function sendMessage(message) {
    addMessage(message, true);
    showTyping();
    setLoading(true);
    
    try {
        const response = await fetch('{{ route("api.chat") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({ message: message })
        });
        
        const data = await response.json();
        hideTyping();
        
        if (data.success) {
            addMessage(data.message);
        } else {
            addMessage(data.message || (lang === 'ar' ? 'عذراً، حدث خطأ.' : 'Sorry, an error occurred.'));
        }
    } catch (error) {
        hideTyping();
        addMessage(lang === 'ar' 
            ? 'عذراً، تعذر الاتصال. يرجى المحاولة مرة أخرى.' 
            : 'Sorry, connection failed. Please try again.');
    }
    
    setLoading(false);
}

chatForm.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const message = userInput.value.trim();
    if (!message) return;
    
    userInput.value = '';
    sendMessage(message);
});

// Auto-scroll to bottom on load
chatMessages.scrollTop = chatMessages.scrollHeight;
</script>
@endsection
