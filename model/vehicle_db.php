<?php 
    function get_vehicles_by_class($class_id, $sort) {
        global $db;
        if ($sort == 'year'){
            $orderby = 'V.year';
        } else {
            $orderby = 'V.price';
        }
        
        $query = 'SELECT V.vehcileID, V.year, M.makeName, V.model, V.price, T.typeName, C.className 
        FROM vehicles V 
        LEFT JOIN makes M ON V.makeID = M.makeID 
        LEFT JOIN classes C ON V.classID = C.classID 
        LEFT JOIN types T ON V.typeID = T.typeID 
        WHERE V.classID = :class_id 
        ORDER BY ' . $orderby . ' DESC';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function get_vehicles_by_type($type_id, $sort) {
        global $db;
        if ($sort == 'year'){
            $orderby = 'V.year';
        } else {
            $orderby = 'V.price';
        }
        
        $query = 'SELECT V.vehicleID, V.year, M.makeName, V.model, V.price, T.typeName, C.className
        FROM vehicles V 
        LEFT JOIN makes M ON V.makeID = M.makeID 
        LEFT JOIN classes C ON V.classID = C.classID 
        LEFT JOIN types T ON V.typeID = T.typeID 
        WHERE V.typeID = :type_id 
        ORDER BY ' . $orderby . ' DESC';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':type_id', $type_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function get_vehicles_by_make($make_id, $sort) {
        global $db;
        if ($sort == 'year'){
            $orderby = 'V.year';
        } else {
            $orderby = 'V.price';
        }
        
        $query = 'SELECT V.vehicleID, V.year, M.makeName, V.model, V.price, T.typeName, C.className
        FROM vehicles V 
        LEFT JOIN makes M ON V.makeID = M.makeID 
        LEFT JOIN classes C ON V.classID = C.classID 
        LEFT JOIN types T ON V.typeID = T.typeID  
        WHERE V.makeID = :make_id 
        ORDER BY ' . $orderby . ' DESC';
        
        $statement = $db->prepare($query);
        $statement->bindValue(':make_id', $make_id);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function get_all_vehicles($sort) {
        global $db;
        if ($sort == 'year'){
            $orderby = 'V.year';
        } else {
            $orderby = 'V.price';
        }
        $query = 'SELECT V.vehicleID, V.year, M.makeName, V.model, V.price, T.typeName, C.className
            FROM vehicles V 
            LEFT JOIN makes M ON V.makeID = M.makeID 
            LEFT JOIN classes C ON V.classID = C.classID 
            LEFT JOIN types T ON V.typeID = T.typeID  
            ORDER BY ' . $orderby . ' DESC';
        $statement = $db->prepare($query);
        $statement->execute();
        $vehicles = $statement->fetchAll();
        $statement->closeCursor();
        return $vehicles;
    }

    function delete_vehicle($vehicle_id) {
        global $db;
        $query = 'DELETE FROM vehicles WHERE vehicleID = :vehicle_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicle_id', $vehicle_id);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($make_id, $type_id, $class_id, $year, $model, $price) {
        global $db;
        $query = 'INSERT INTO vehicles (year, makeID, model, price, typeID, classID)
              VALUES
                 (:year, :make_id, :model, :price, :type_id, :class_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':year', $year);
        $statement->bindValue(':make_id', $make_id);
        $statement->bindValue(':model', $model);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':type_id', $type_id);
        $statement->bindValue(':class_id', $class_id);
        $statement->execute();
        $statement->closeCursor();
    }