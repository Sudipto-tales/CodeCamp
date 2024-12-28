<?php
class Database {
    // MongoDB Manager instance
    private $manager;
    private $database = "sudipto"; // Database name

    public function __construct() {
        try {
            // Connect to MongoDB
            $this->manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
        } catch (MongoDB\Driver\Exception\Exception $e) {
            die("Error connecting to MongoDB: " . $e->getMessage());
        }
    }

    /**
     * Insert data into a specified collection.
     *
     * @param string $collection Name of the collection.
     * @param array $data Data to be inserted.
     * @return string Success or error message.
     */
    public function insertData($collection, $data) {
        try {
            $bulk = new MongoDB\Driver\BulkWrite();
            $bulk->insert($data);

            // Specify the collection to insert data
            $this->manager->executeBulkWrite("{$this->database}.{$collection}", $bulk);

            return "Data inserted successfully into collection: {$collection}.";
        } catch (MongoDB\Driver\Exception\Exception $e) {
            return "Error inserting data into {$collection}: " . $e->getMessage();
        }
    }
}
?>
