<?php

namespace sys4soft;

use PDO;
use PDOException;
use stdClass;

// ============================================================================
class Database
{
    // properties
    private $_host;
    private $_database;
    private $_username;
    private $_password;
    private $_return_type;

    // ========================================================================
    public function __construct($cfg_options, $return_type = 'object')
    {
        // set connection configurations
        $this->_host = $cfg_options['host'];
        $this->_database = $cfg_options['database'];
        $this->_username = $cfg_options['username'];
        $this->_password = $cfg_options['password'];

        // sets the return type
        if (!empty($return_type) && $return_type == 'object') {
            $this->_return_type = PDO::FETCH_OBJ;
        } else {
            $this->_return_type = PDO::FETCH_ASSOC;
        }
    }

    // ========================================================================
    public function execute_query($sql, $parameters = null)
    {
        // executes a query with return results

        // connection
        $connection = new PDO(
            'mysql:host=' . $this->_host . ';dbname=' . $this->_database,
            $this->_username,
            $this->_password,
            array(PDO::ATTR_PERSISTENT => true)
        );

        $results = null;

        // prepare and execute the query
        try {

            $db = $connection->prepare($sql);
            if (!empty($parameters)) {
                $db->execute($parameters);
            } else {
                $db->execute();
            }
            $results = $db->fetchAll($this->_return_type);

        } catch (PDOException $err) {

            // close connection
            $connection = null;

            // return error
            return $this->_result('error', $err->getMessage(), $sql, null, 0, null);
        }

        // close connection
        $connection = null;

        // return result
        return $this->_result('success', 'success', $sql, $results, $db->rowCount(), null);
    }

    // ========================================================================
    public function execute_non_query($sql, $parameters = null)
    {
        // executes a query that will not return results

        // connection
        $connection = new PDO(
            'mysql:host=' . $this->_host . ';dbname=' . $this->_database,
            $this->_username,
            $this->_password,
            array(PDO::ATTR_PERSISTENT => true)
        );

        // init transaction
        $connection->beginTransaction();

        // prepare and execute the query
        try {

            $db = $connection->prepare($sql);
            if (!empty($parameters)) {
                $db->execute($parameters);
            } else {
                $db->execute();
            }

            // last inserted id
            $last_inserted_id = $connection->lastInsertId();

            // finish transaction
            $connection->commit();

        } catch (PDOException $err) {

            // undo all sql operations on error
            $connection->rollBack();

            // close connection
            $connection = null;

            // return error
            return $this->_result('error', $err->getMessage(), $sql, null, 0, null);
        }

        $connection = null;

        // return result
        return $this->_result('success', 'success', $sql, null, $db->rowCount(), $last_inserted_id);
    }

    // ========================================================================
    private function _result($status, $message, $sql, $results, $affected_rows, $last_id)
    {
        $tmp = new stdClass();
        $tmp->status = $status;
        $tmp->message = $message;
        $tmp->query = $sql;
        $tmp->results = $results;
        $tmp->affected_rows = $affected_rows;
        $tmp->last_id = $last_id;
        return $tmp;
    }
}
