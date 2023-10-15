CREATE DATABASE IF NOT EXISTS `gwsc`;
USE `gwsc`;

    CREATE TABLE IF NOT EXISTS `bookings` (
      `booking_id` int(11) NOT NULL AUTO_INCREMENT,
      `site` text NOT NULL,
      `pitch` text NOT NULL,
      `no_of_people` int(11) NOT NULL,
      `check_in_date` date NOT NULL,
      `check_out_date` date NOT NULL,
      `booked_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
      PRIMARY KEY (`booking_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `bookings` (`site`, `pitch`, `no_of_people`, `check_in_date`, `check_out_date`) VALUES
('Adventure City', 'Eureka Tent', 2, '2023-06-03', '2023-06-07'),
('Adventure City', 'Eureka Tent', 4, '2023-06-23', '2023-06-27'),
('Adventure City', 'Eureka Tent', 3, '2023-06-05', '2023-06-08');


CREATE TABLE IF NOT EXISTS `pitches` (
  `pitch_id` int(11) NOT NULL AUTO_INCREMENT,
  `Pitch_name` text NOT NULL,
   `Price` text NOT NULL,
  `image_link` text NOT NUll,
  `Description` text NOT NULL,
  PRIMARY KEY (`pitch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pitches` (`Pitch_name`, `Price`, `image_link`, `Description`) VALUES
('Eureka Tent', '£30','https://images.pexels.com/photos/3019714/pexels-photo-3019714.jpeg?auto=compress&cs=tinysrgb&w=600', "Discover the epitome of outdoor comfort with our Eureka Tent pitch. Nestled within nature's embrace, this spacious camping spot offers an idyllic setting for your next adventure. Whether you're an experienced camper or it's your first time beneath the stars, the Eureka Tent pitch ensures a remarkable experience"),
('Mori Motorhome','£20', 'https://images.pexels.com/photos/17816414/pexels-photo-17816414/free-photo-of-cars-with-trailers-at-a-campsite-in-mountains.jpeg?auto=compress&cs=tinysrgb&w=600',"Welcome to the Mori Motorhome pitch, where the road becomes your home, and adventure awaits just outside your doorstep. This pitch is tailor-made for those who prefer to roam in the comfort of their motorhome while experiencing the great outdoors."),
('Nkobo Caravan','£40', 'https://images.pexels.com/photos/2330197/pexels-photo-2330197.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',"Unleash the spirit of adventure with the Nkobo Caravan pitch, where the journey is as thrilling as the destination. Whether you're an experienced caravan enthusiast or embarking on your very first caravan adventure, this pitch offers a perfect blend of comfort and exploration");

CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `site` text NOT NULL,
  `pitch` text NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `reviews` (`name`, `site`, `pitch`, `rating`, `comment`) VALUES
('Lombe', 'Kalimba Farms', 'Eureka Tent', 3, ''),
('Lombe', 'Kalimba Farms', 'Eureka Tent', 3, ''),
('Josh', 'Kalimba Farms', 'Mori Motorhome', 2, ''),
('John Phiri', 'Monkey Pools', 'Nkobo Caravan', 4, 'Enjoyed myself');


CREATE TABLE IF NOT EXISTS `sites` (
  `site_id` int(11) NOT NULL AUTO_INCREMENT,
  `site_name` text NOT NULL,
  PRIMARY KEY (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `sites` (`site_name`) VALUES
('Adventure City'),
('Kalimba Farms'),
('Monkey Pools');

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `phone_number` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`firstname`, `lastname`, `phone_number`, `email`, `password`) VALUES
('Emmanuel', 'Chisola', '987654321', 'emmanuelchisola06@gmail.com', '121'),
('John', 'Phiri', '123456789', 'jp@yahoo.com','jp');

CREATE TABLE IF NOT EXISTS `lakes` (
  `lake_id` int(11) NOT NULL AUTO_INCREMENT,
  `lake_name` text NOT NULL,
   `Price` text NOT NULL,
  `image_link` text NOT NUll,
  `Description` text NOT NULL,
  PRIMARY KEY (`lake_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `lakes` (`lake_name`, `Price`, `image_link`, `Description`) VALUES
('Lake Mouto', '£40', 'https://images.pexels.com/photos/2091351/pexels-photo-2091351.jpeg?auto=compress&cs=tinysrgb&w=600', 'Known for its clear blue waters and outdoor activities.'),
('Lake Waterloo', '£30', 'https://images.pexels.com/photos/247600/pexels-photo-247600.jpeg?auto=compress&cs=tinysrgb&w=600', 'One of the five Great Lakes of North America, offering beautiful shorelines and recreational opportunities.'),
('Lake Louise', '£25', 'https://images.pexels.com/photos/443446/pexels-photo-443446.jpeg?auto=compress&cs=tinysrgb&w=600', 'A glacial lake, surrounded by snow-capped mountains and known for its vibrant turquoise water.'),
('Crater Lake', '£16', 'https://images.pexels.com/photos/518485/pexels-photo-518485.jpeg?auto=compress&cs=tinysrgb&w=600', 'A breathtaking caldera lake, famous for its deep blue color and Wizard Island.');

CREATE TABLE IF NOT EXISTS `swim_sessions` (
  `session_id` INT AUTO_INCREMENT PRIMARY KEY,
  `session_time` DATETIME NOT NULL,
  `lake_name` TEXT NOT NULL,
  `email` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




CREATE TABLE pitch_bookings (
   ` booking_id` INT AUTO_INCREMENT PRIMARY KEY,
    `Pitch_name` VARCHAR(255) NOT NULL,
    `Price` DECIMAL (10, 2) NOT NULL,
    `booking_date` DATE NOT NULL,
    `email` VARCHAR(255) NOT NULL
);
COMMIT;