<?php
if (isset($_SESSION['status'])):
    if ($_SESSION['status'] == 'Админ'):
        // Обработка загрузки фото
        require_once('database-api/load-photo');
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['upload_photo'])) {
            $photo_name = $_POST['photo_name'] ?? '';
            $description = $_POST['description'] ?? '';
            $price = $_POST['price'] ?? '';
            $photo_type = $_POST['type'] ?? '';

            // Проверяем, что файл был загружен
            if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                $upload_dir = 'imgs/';

                // Безопасное имя файла
                $original_name = $_FILES['photo']['name'];
                $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);
                $safe_filename = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9-_\.]/', '', $original_name);
                $target_path = $upload_dir . $safe_filename;

                // Проверяем тип файла
                $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                $file_type = $_FILES['photo']['type'];

                if (in_array($file_type, $allowed_types)) {
                    // Перемещаем файл
                    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target_path)) {
                        // Здесь можно сохранить данные в базу данных
                        // Для примера просто выводим сообщение об успехе
                        send_photo($photo_type, $target_path, $description, $photo_name, $price);
                    }
                }
            }
            // Перенаправляем чтобы избежать повторной отправки формы
            echo '<script> window.location.href ="index.php?page=admin"  </script>';
            exit;
        }
        ?>
        <style>
            /* Стили для админ панели в игровой тематике */
            .admin-container {
                max-width: 1400px;
                margin: 20px auto;
                background: linear-gradient(135deg, #0a0e12 0%, #05080c 100%);
                border-radius: 15px;
                padding: 30px;
                box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
                border: 1px solid rgba(200, 155, 60, 0.3);
                position: relative;
                overflow: hidden;
            }

            .admin-container::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect fill="none" stroke="%23c89b3c" stroke-width="0.5" stroke-dasharray="5,5" x="10" y="10" width="80" height="80"/></svg>');
                opacity: 0.1;
                pointer-events: none;
            }

            .admin-container h1 {
                color: #c89b3c;
                text-align: center;
                margin-bottom: 30px;
                font-size: 36px;
                text-shadow: 0 0 10px rgba(200, 155, 60, 0.3);
                position: relative;
                padding-bottom: 15px;
            }

            .admin-container h1::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100px;
                height: 3px;
                background: linear-gradient(90deg, transparent, #c89b3c, transparent);
            }

            .admin-header {
                display: flex;
                justify-content: center;
                margin-bottom: 30px;
            }

            /* Кнопка добавления фото */
            .btn {
                background: linear-gradient(135deg, #c89b3c 0%, #f39c12 100%);
                color: white;
                border: none;
                padding: 15px 30px;
                border-radius: 25px;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                transition: all 0.3s ease;
                box-shadow: 0 4px 15px rgba(200, 155, 60, 0.4);
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .btn:hover {
                background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(200, 155, 60, 0.6);
            }

            /* Модальное окно */
            .modal {
                display: none;
                position: fixed;
                z-index: 1000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                backdrop-filter: blur(5px);
            }

            .modal-content {
                background: linear-gradient(135deg, #0a0e12 0%, #05080c 100%);
                margin: 5% auto;
                padding: 0;
                border-radius: 15px;
                width: 90%;
                max-width: 500px;
                box-shadow: 0 10px 40px rgba(0, 0, 0, 0.6);
                border: 2px solid rgba(200, 155, 60, 0.5);
                position: relative;
                overflow: hidden;
                animation: modalSlideIn 0.3s ease-out;
            }

            @keyframes modalSlideIn {
                from {
                    opacity: 0;
                    transform: translateY(-50px) scale(0.9);
                }

                to {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .modal-content::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 4px;
                background: linear-gradient(90deg, #c89b3c, #f39c12, #c89b3c);
            }

            .modal-header {
                background: rgba(10, 14, 18, 0.9);
                color: #e0e0e0;
                padding: 20px 25px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid rgba(200, 155, 60, 0.3);
            }

            .modal-header h2 {
                margin: 0;
                color: #c89b3c;
                font-size: 24px;
            }

            .close {
                color: #aaa;
                font-size: 28px;
                font-weight: bold;
                cursor: pointer;
                transition: color 0.3s ease;
                background: none;
                border: none;
                padding: 0;
                width: 30px;
                height: 30px;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .close:hover {
                color: #c89b3c;
            }

            /* Форма */
            form {
                padding: 25px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                margin-bottom: 8px;
                color: #c89b3c;
                font-weight: bold;
                font-size: 14px;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .form-group input,
            .form-group textarea,
            .form-group select {
                width: 100%;
                padding: 12px 15px;
                border: 2px solid rgba(200, 155, 60, 0.3);
                border-radius: 8px;
                font-size: 14px;
                background: rgba(30, 30, 30, 0.8);
                color: #e0e0e0;
                transition: all 0.3s ease;
                font-family: inherit;
            }

            .form-group input:focus,
            .form-group textarea:focus,
            .form-group select:focus {
                outline: none;
                border-color: #c89b3c;
                box-shadow: 0 0 0 3px rgba(200, 155, 60, 0.2);
                background: rgba(40, 40, 40, 0.8);
            }

            .form-group input::placeholder,
            .form-group textarea::placeholder {
                color: #8c8c8c;
            }

            .form-group textarea {
                resize: vertical;
                min-height: 80px;
            }

            .submit-btn {
                background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
                color: white;
                border: none;
                padding: 15px 30px;
                border-radius: 25px;
                cursor: pointer;
                font-size: 16px;
                font-weight: bold;
                width: 100%;
                transition: all 0.3s ease;
                text-transform: uppercase;
                letter-spacing: 1px;
                margin-top: 10px;
            }

            .submit-btn:hover {
                background: linear-gradient(135deg, #27ae60 0%, #219653 100%);
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
            }

            /* Декоративные элементы */
            .modal-content::after {
                content: "♠";
                position: absolute;
                bottom: 10px;
                right: 10px;
                color: rgba(200, 155, 60, 0.1);
                font-size: 40px;
                z-index: 0;
            }

            /* Адаптивность */
            @media (max-width: 768px) {
                .admin-container {
                    padding: 20px;
                    margin: 10px;
                }

                .admin-container h1 {
                    font-size: 28px;
                }

                .modal-content {
                    margin: 10% auto;
                    width: 95%;
                }

                form {
                    padding: 20px;
                }
            }

            @media (max-width: 480px) {
                .admin-container {
                    padding: 15px;
                }

                .modal-content {
                    margin: 5% auto;
                    width: 98%;
                }

                .modal-header {
                    padding: 15px 20px;
                }

                .modal-header h2 {
                    font-size: 20px;
                }

                form {
                    padding: 15px;
                }

                .btn {
                    padding: 12px 24px;
                    font-size: 14px;
                }
            }

            /* Стили для выпадающего списка */
            .form-group select {
                appearance: none;
                background-image: url('data:image/svg+xml;utf8,<svg fill="%23c89b3c" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
                background-repeat: no-repeat;
                background-position: right 12px center;
                background-size: 16px;
                padding-right: 40px;
            }

            /* Стили для файлового инпута */
            .form-group input[type="file"] {
                padding: 10px;
                border: 2px dashed rgba(200, 155, 60, 0.3);
                background: rgba(30, 30, 30, 0.6);
                transition: all 0.3s ease;
            }

            .form-group input[type="file"]:hover {
                border-color: #c89b3c;
                background: rgba(30, 30, 30, 0.8);
            }

            .form-group input[type="file"]::file-selector-button {
                background: linear-gradient(135deg, #c89b3c 0%, #f39c12 100%);
                color: white;
                border: none;
                padding: 8px 16px;
                border-radius: 5px;
                cursor: pointer;
                margin-right: 10px;
                transition: all 0.3s ease;
            }

            .form-group input[type="file"]::file-selector-button:hover {
                background: linear-gradient(135deg, #f39c12 0%, #e67e22 100%);
            }
        </style>

        <body>
            <h1>Админ панель</h1>
            <div class="admin-container">
                <div class="header">
                    <button class="btn" id="openModalBtn">Добавить предмет</button>
                </div>
            </div>

            <!-- Модальное окно -->
            <div id="uploadModal" class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Загрузка фото</h2>
                        <button class="close">&times;</button>
                    </div>

                    <form action="" method="POST" enctype="multipart/form-data" id="uploadForm">
                        <div class="form-group">
                            <label for="photo">Выберите фото:</label>
                            <input type="file" id="photo" name="photo" accept="image/*" required>
                        </div>

                        <div class="form-group">
                            <label for="photo_name">Название фото:</label>
                            <input type="text" id="photo_name" name="photo_name" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Описание:</label>
                            <textarea id="description" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Стоимость:</label>
                            <input type="number" id="price" name="price" step="0.01" min="0">
                        </div>

                        <div class="form-group">
                            <label for="description">Тип (аватар/предмет):</label>
                            <textarea id="type" name="type"></textarea>
                        </div>

                        <button type="submit" name="upload_photo" value="1" class="btn submit-btn">Загрузить фото</button>
                    </form>
                </div>
            </div>

            <script>
                // Управление модальным окном
                const modal = document.getElementById('uploadModal');
                const openBtn = document.getElementById('openModalBtn');
                const closeBtn = document.querySelector('.close');
                const form = document.getElementById('uploadForm');

                // Открыть модальное окно
                openBtn.addEventListener('click', () => {
                    modal.style.display = 'block';
                });

                // Закрыть модальное окно
                closeBtn.addEventListener('click', () => {
                    modal.style.display = 'none';
                });

                // Закрыть при клике вне окна
                window.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.style.display = 'none';
                    }
                });
                // Очистка формы при закрытии
                modal.addEventListener('hide', () => {
                    form.reset();
                });
            </script>
        </body>

        </html>
    <? endif; else:
    echo "<script> window.location.href='index.php?pages=home.php' </script>"; endif ?>