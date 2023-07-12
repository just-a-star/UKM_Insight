<div class="rounded-sm border border-slate-200 bg-white p-6 shadow-lg">
    <h2 class="text-lg font-semibold text-slate-800">Chatbot Analysis</h2>
    <div class="mt-4 space-y-4">
        <div id="chat-container" class="h-48 overflow-y-auto border border-slate-100 bg-gray-50 px-4 py-2"></div>

        <form id="chat-form" class="flex flex-col items-center space-y-2 sm:flex-row sm:space-y-0 sm:space-x-2">
            <input id="user-input" type="text"
                class="w-full rounded-sm border border-slate-300 px-3 py-2 focus:border-indigo-500 focus:outline-none sm:w-auto"
                placeholder="Enter your message...">
            <button type="submit" class="btn bg-indigo-500 text-white hover:bg-indigo-600">Send</button>
        </form>
    </div>
</div>

<script>
    const chatContainer = document.getElementById('chat-container');
    const chatForm = document.getElementById('chat-form');
    const userInput = document.getElementById('user-input');

    // Fetch initial JSON data for the chatbot
    fetch('/analisa-chatbot-chat', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        },
        body: JSON.stringify({
            message: ''
        })
    })
    chatForm.addEventListener('submit', (event) => {
        event.preventDefault();

        const userMessage = userInput.value;

        // Add user message to the chat container
        appendMessage('user', userMessage);

        // Send user message to the server for chatbot analysis
        fetch('/analisa-chatbot-chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                        'content'),
                },
                body: JSON.stringify({
                    message: userMessage
                })
            })
            .then(response => response.json())
            .then(data => {
                // Extract the bot response from the server response
                const botMessage = data.message;

                // Add bot response to the chat container
                appendMessage('bot', botMessage);
            })
            .catch(error => {
                console.error('Error:', error);
            });

        // Clear the input field
        userInput.value = '';
    });

    function appendMessage(sender, message) {
        const messageElement = document.createElement('div');
        messageElement.classList.add('text-sm', 'mb-2');

        if (sender === 'user') {
            messageElement.innerHTML = `<span class="font-semibold text-slate-600">You:</span> ${message}`;
        } else if (sender === 'bot') {
            messageElement.innerHTML = `<span class="font-semibold text-slate-600">Bot:</span> ${message}`;
        }

        chatContainer.appendChild(messageElement);
        chatContainer.scrollTop = chatContainer.scrollHeight;
    }
</script>
