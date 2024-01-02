DELIMITER //
CREATE PROCEDURE AddIndexToAllColumns(tableName VARCHAR(255))
BEGIN
    DECLARE done INT DEFAULT 0;
    DECLARE columnName VARCHAR(255);
    DECLARE cur CURSOR FOR 
        SELECT COLUMN_NAME
        FROM INFORMATION_SCHEMA.COLUMNS
        WHERE TABLE_NAME = tableName;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
    
    OPEN cur;
    
    read_loop: LOOP
        FETCH cur INTO columnName;
        IF done THEN
            LEAVE read_loop;
        END IF;
        SET @query = CONCAT('ALTER TABLE `', tableName, '` ADD INDEX (', columnName, ');');
        PREPARE stmt FROM @query;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END LOOP;
    CLOSE cur;
END //

DELIMITER ;
CALL AddIndexToAllColumns('relations');
