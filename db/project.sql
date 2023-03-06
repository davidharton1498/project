
CREATE TABLE `students` (
                               `STUDENT_ID` varchar(30) NOT NULL,
                               `FIRST_NAME` varchar(30) NOT NULL,
                               `LAST_NAME` varchar(30) NOT NULL,
                               `EMAIL` varchar(30) NOT NULL,
                               `PASSWORD` varchar(30) NOT NULL,
                               `DATE` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


INSERT INTO `students` (`STUDENT_ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `PASSWORD`, `DATE`) VALUES
    ('1', 'Popa', 'Maria', 'popa.maria@gmail.com', 'pass123','2023-05-28 03:08 PM');