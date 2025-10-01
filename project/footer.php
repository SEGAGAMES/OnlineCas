    <!-- Подвал сайта -->
    <footer>
        <div class="footer-section">
            <h3>О проекте</h3>
            <a href="index.php?page=about">Информация о проекте</a>
        </div>
        <div class="footer-section">
            <h3>Об авторах</h3>
            <a href="index.php?page=authors">Команда проекта</a>
        </div>
        <div class="footer-section">
            <h3>Партнерам</h3>
            <a href="index.php?page=partners">Сотрудничество</a>
        </div>
        <div class="footer-section">
            <h3>Правила</h3>
            <a href="index.php?page=terms">Пользовательское соглашение</a>
        </div>
        <div class="footer-section">
            <h3>Поддержка</h3>
            <a href="index.php?page=support">Помощь проекту</a>
        </div>
        <div class="footer-section">
            <h3>FAQ</h3>
            <a href="index.php?page=faq">Частые вопросы</a>
        </div>
        <div class="disclaimer">
            Учебный проект. Все материалы представлены исключительно в ознакомительных целях.
        </div>
    </footer>
    <!-- Чат с менеджером -->
    <div id="chatModal" class="chat-modal">
        <div class="chat-content">
            <div class="chat-header">
                <h3>Чат с менеджером</h3>
                <span class="close-chat">&times;</span>
            </div>
            <div class="chat-body">
                <div class="chat-messages">
                    <div class="message manager-message">
                        <p>Здравствуйте! Чем я могу вам помочь?</p>
                    </div>
                </div>
                <div class="chat-input">
                    <input type="text" placeholder="Введите ваше сообщение..." id="chatInput">
                    <button id="sendMessageBtn">Отправить</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Кнопка для открытия чата -->
    <div id="chatMinimized" class="chat-minimized">
        <span>💬</span>
    </div>

    <script>
        // Элементы чата
        const chatModal = document.getElementById('chatModal');
        const chatMinimized = document.getElementById('chatMinimized');
        const closeChat = document.querySelector('.close-chat');
        
        // Открытие чата
        chatMinimized.addEventListener('click', function()
        {
            chatModal.style.display = 'block';
            setTimeout(() =>{chatModal.classList.add('active');}, 10);
        });

        // Закрытие чата
        closeChat.addEventListener('click', function(e)
        {
            e.stopPropagation();
            chatModal.classList.remove('active');
            setTimeout(() => {chatModal.style.display = 'none';}, 300);
        });

        // Отправка сообщения
        document.getElementById('sendMessageBtn').addEventListener('click', sendMessage);
        document.getElementById('chatInput').addEventListener('keypress', function(e)
        {
            if (e.key === 'Enter')
                sendMessage();
        });

        function sendMessage()
         {
            const input = document.getElementById('chatInput');
            const message = input.value.trim();
            
            if (message !== '') {
                // Добавляем сообщение пользователя
                const userMessage = document.createElement('div');
                userMessage.className = 'message user-message';
                userMessage.innerHTML = `<p>${message}</p>`;
                document.querySelector('.chat-messages').appendChild(userMessage);
                
                // Очищаем поле ввода
                input.value = '';
                
                // Имитируем ответ менеджера через 1-2 секунды
                setTimeout(() => {
                    const managerMessage = document.createElement('div');
                    managerMessage.className = 'message manager-message';
                    managerMessage.innerHTML = '<p>Спасибо за ваше сообщение. Мы свяжемся с вами в ближайшее время.</p>';
                    document.querySelector('.chat-messages').appendChild(managerMessage);
                    
                    // Прокручиваем чат вниз
                    const chatMessages = document.querySelector('.chat-messages');
                    chatMessages.scrollTop = chatMessages.scrollHeight;
                }, 1000 + Math.random() * 1000);
                
                // Прокручиваем чат вниз
                const chatMessages = document.querySelector('.chat-messages');
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }
        }
        
        // Убираем обработчик с кнопки поддержки в шапке
        document.getElementById('supportBtn').addEventListener('click', function(e) {
            e.preventDefault();
            chatMinimized.click();
        });
    </script>
</body>
</html> 	