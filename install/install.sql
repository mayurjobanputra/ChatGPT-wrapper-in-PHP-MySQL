CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    register_date DATETIME NOT NULL,
    last_login DATETIME,
    username VARCHAR(255) NOT NULL,
    user_status VARCHAR(255),
    user_role VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS chats (
    id INT AUTO_INCREMENT PRIMARY KEY,
    chat_message TEXT NOT NULL,
    message_date DATETIME NOT NULL,
    message_owner INT NULL,
    FOREIGN KEY (message_owner) REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS app_settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    setting_key VARCHAR(255) NOT NULL,
    setting_value VARCHAR(255),
    date_changed DATETIME,
    date_created DATETIME,
    version VARCHAR(255)
);
