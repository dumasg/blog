INSERT INTO authors ( name, firstname, pseudo ) VALUES
("Dupond","Matéo","ShadowStrikerX"),
("Lambert","Valentine","CyberNova97"),
("Martin","Anais","VortexWraith"),
("Leroux","Julien","PhoenixRising23"),
("Moreau","Sophie","QuantumQuasar"),
('John', 'Doe', 'johndoe'),
('Jane', 'Smith', 'janesmith'),
('Bob', 'Johnson', 'bobjohnson'),
('Alice', 'Williams', 'alicewilliams'),
('Charlie', 'Davis', 'charliedavis');

INSERT INTO articles ( title, content, publication_date, end_publication_date, rating, authors_id) 
VALUES
("L'importance du sport dans une vie équilibrée", "Le sport joue un rôle essentiel dans le maintien d'une vie saine. En plus des bienfaits physiques, il contribue également au bien-être mental. Les activités sportives régulières peuvent améliorer la concentration, réduire le stress et favoriser un sommeil réparateur.", "2024-02-01", "2024-02-28", 1, 1),
("Découvrir la beauté de la nature à travers la randonnée", "La randonnée offre une expérience immersive dans la nature. Des sentiers boisés aux sommets majestueux, chaque pas offre une opportunité de se reconnecter avec l'environnement naturel.", "2023-12-01", "2025-01-01", 2, 2),
("Les secrets d'une alimentation équilibrée pour une vie saine", "Une alimentation équilibrée est la clé d'une vie saine. Découvrez comment choisir des aliments nutritifs pour maintenir votre énergie tout au long de la journée.", "2023-11-01", "2025-01-01", 3, 3),
("Exploration urbaine : Découvrir les trésors cachés de la ville", "Les ruelles étroites, les cafés pittoresques, et les œuvres d'art urbaines - explorez les joyaux cachés de votre ville pour une aventure urbaine inoubliable.", "2023-09-01", "2025-01-01", 4, 4),
("Bienfaits de la méditation : Un voyage intérieur vers la paix intérieure", "La méditation offre une pause précieuse dans notre monde occupé. Explorez les bienfaits de la méditation pour la gestion du stress et la recherche de la paix intérieure.", "2024-02-01", "2024-02-28", 5, 5),
("Voyage culinaire : Explorer les saveurs du monde dans votre cuisine", "Plongez dans une aventure culinaire en explorant des recettes du monde entier. Découvrez comment la cuisine peut être une forme d'expression artistique et une expérience sensorielle.", "2023-12-01", "2025-01-01", 2, 6),
("Les merveilles de l'astronomie : Un regard sur l'infini", "Explorez les mystères de l'univers, des étoiles scintillantes aux galaxies lointaines. L'astronomie offre une perspective captivante sur notre place dans l'infini.", "2023-11-01", "2025-01-01", 3, 8),
("L'art de la photographie : Capturer des moments éternels", "LLa photographie va au-delà de la simple prise de vue. Découvrez comment cette forme d'art peut figer des moments précieux et raconter des histoires uniques.", "2023-09-01", "2025-01-01", 3, 2),
("La puissance de la gratitude : Cultiver la joie au quotidien", "La pratique de la gratitude peut transformer notre perspective quotidienne. Explorez comment reconnaître et apprécier les petites choses peut apporter une grande joie.", "2023-11-01", "2025-01-01", 1, 3),
("Aventures aquatiques : Plongée dans les profondeurs de l'océan", "Découvrez la magie sous-marine à travers la plongée. Des récifs coralliens colorés aux créatures fascinantes, explorez les merveilles cachées des océans.", "2023-09-01", "2025-01-01", 1, 2);


INSERT INTO comments ( content, authors_id, articles_id ) VALUES
("Bravo ! Le sport a transformé ma vie. Merci pour cet article inspirant!", 1,1),
("D'accord sur l'importance du sport. Cela donne de l'énergie et de la motivation !", 2,1),
("À la recherche de nouvelles activités sportives à essayer. Des recommandations", 3,1),
("La randonnée est ma passion. Des conseils pour de nouveaux sentiers?", 4,2),
("Les photos sont incroyables. Ça donne envie de partir en randonnée!", 5,2),
("La nature a un pouvoir de guérison. Rien de tel qu'une bonne randonnée.", 6,2),
("Alimentation équilibrée = énergie. Des conseils pour des repas nutritifs", 7,3),
("Choisir des aliments sains est la clé. Merci pour ces conseils pratiques!", 8,3),
("Manger équilibré fait toute la différence. Des recettes à partager!", 9,3),
("Explorer ma ville à fond. Des recommandations pour des endroits cachés!", 10,4),
("Les ruelles et cafés urbains sont mes préférés. Quels sont les vôtres?", 1,4),
("L'exploration urbaine ouvre les yeux sur la beauté locale. Des suggestions?", 2,4),
("La méditation transforme la vie. Comment intégrer cela au quotidien", 1,5),
("La paix intérieure commence par la méditation. Des conseils pratiques", 2,5),
("Gérer le stress avec la méditation. Des astuces pour débuter", 3,5),
("Cuisiner le monde chez soi. Des recettes internationales à essayer", 4,6),
("Sans avis", 5,6),
("L'art culinaire relie les cultures. Des idées pour des repas créatifs", 6,6),
("Juste Bravo !", 7,7),
("L'astronomie élargit notre perspective. Quels faits fascinants connaissez-vous?", 8,7),
("Les étoiles m'ont toujours captivé. Des recommandations pour l'observation", 9,7),
("Chaque photo raconte une histoire. Quel est le sujet préféré de votre objectif", 10,8),
("Sans avis", 1,8),
("La photographie fige le temps. Des conseils pour améliorer ses compétences", 2,8),
("La gratitude transforme la journée. Quels moments avez-vous appréciés récemment", 4,9),
("Être reconnaissant apporte la joie. Des rituels de gratitude à partager", 5,9),
("Juste Bravo !", 6,9),
("La plongée est une expérience unique. Des sites sous-marins à recommander", 7,10),
("Sans avis", 8,10),
("Juste Bravo !", 9,10);


INSERT INTO categories (name) VALUES
("bien-être"),
("hobbies"),
("sport");


INSERT INTO articles_categories (articles_id, categories_id) VALUES
(1,3),
(2,2),
(3,2),
(4,2),
(5,1),
(6,2),
(7,2),
(8,2),
(9,1),
(10,3);