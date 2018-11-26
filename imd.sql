CREATE DATABASE IF NOT EXISTS `imd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `imd`;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_name` varchar(255) NOT NULL,
  `project_location` varchar(255) NOT NULL,
  `project_type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_name`, `project_location`, `project_type`) VALUES
('Choonara', 'Lilongwe', 'Individual Housing '),
('Master Cottage', 'Salima', 'Individual Housing'),
('Abbas', 'Lilongwe', 'Individual Housing '),
('Mr Umar', 'Lilongwe', 'Housing'),
('Mantino', 'Lilongwe', 'Hotel'),
('Grand Palace', 'Mzuzu', 'Hotel'),
('Victoria', 'Blantyre', 'Hotel'),
('ARWA', 'Lilongwe', 'Offices'),
('HB House', 'Lilongwe', 'Offices'),
('Building 1', 'Lilongwe ', 'institutions'),
('City Mall', 'Lilongwe', 'Shopping Malls'),
('Lusaka Masjid Urmar', 'Lusaka', 'Religious Buildings'),
('SOS', 'multiple', 'institutions'),
('Capital Hill', 'Lilongwe', 'Government Buildings'),
('Mwanza Border Post', 'Mwanza', 'Government Buildings'),
('MRA - Malawi Rural Finance', 'Lilongwe', 'Government Buildings'),
('Crossroads Hotel', 'Lilongwe', 'Hotel'),
('Building 2', 'Lilongwe', 'institutions'),
('Building 3', 'Lilongwe', 'institutions'),
('Housing 1', 'Lilongwe', 'Housing'),
('Housing 2', 'Lusaka', 'Housing'),
('Housing 3', 'Lusaka', 'Housing'),
('Housing 4', 'Lusaka', 'Housing'),
('Housing 5', 'Lusaka', 'Housing'),
('Housing 6', 'Lusaka', 'Housing'),
('Institution 4', 'Lusaka', 'institutions'),
('Religious 1', 'Lusaka', 'Religious Buildings'),
('Religious 2', 'Lusaka', 'Religious Buildings');

