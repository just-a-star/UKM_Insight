// resources/js/components/chatbot.js

const chatForm = document.getElementById('chat-form');
const chatContainer = document.getElementById('chat-container');
const userInput = document.getElementById('user-input');

chatForm.addEventListener('submit', async (e) => {
    e.preventDefault();

    const message = userInput.value.trim();

    if (message !== '') {
        const response = await sendChatMessage(message);

        if (response.status === 200) {
            const { choices } = response.data;
            const botReply = choices[0].text.trim();

            appendMessage('User', message);
            appendMessage('Chatbot', botReply);

            userInput.value = '';
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }
    }
});

async function sendChatMessage(message) {
    try {
        const response = await axios.post('/analisa-chatbot-chat', {
            chatInput: message
        });

        return response;
    } catch (error) {
        console.error(error);
    }
}

function appendMessage(sender, message) {
    const messageElement = document.createElement('div');
    messageElement.classList.add('flex', 'space-x-2');

    const senderElement = document.createElement('div');
    senderElement.classList.add('font-semibold');
    senderElement.textContent = sender + ':';

    const messageTextElement = document.createElement('div');
    messageTextElement.textContent = message;

    messageElement.appendChild(senderElement);
    messageElement.appendChild(messageTextElement);

    chatContainer.appendChild(messageElement);
}

