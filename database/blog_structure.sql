CREATE TABLE authors (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(45) NOT NULL,
    firstname VARCHAR(45) NOT NULL,
    pseudo VARCHAR(45) UNIQUE
);
CREATE TABLE articles (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    title VARCHAR(150) NOT NULL,
    content TEXT NOT NULL,
    publication_date DATE NOT NULL,
    end_publication_date DATE NOT NULL,
    rating INT DEFAULT 0,
    authors_id INT,
    FOREIGN KEY (authors_id) REFERENCES authors(id) ON DELETE CASCADE
);
CREATE TABLE comments (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    content VARCHAR(150) NOT NULL,
    date_publication DATE DEFAULT NOW,
    authors_id INT,
    FOREIGN KEY (authors_id) REFERENCES authors(id) ON DELETE CASCADE,
    articles_id INT,
    FOREIGN KEY (articles_id) REFERENCES articles(id) ON DELETE CASCADE
);
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(45) NOT NULL
);

CREATE TABLE articles_categories (
    articles_id INT,
    FOREIGN KEY ( articles_id ) REFERENCES articles(id) ON DELETE CASCADE,
    categories_id INT,
    FOREIGN KEY ( categories_id ) REFERENCES categories(id)
)