    <?php

class Config

{
    private $HOSTNAME = "localhost";
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $DB_NAME = "rnw"; 

    private $USERS_TABLE = "users";
    private $MOVIES_TABLE = "movies";
    private $BOOKINGS_TABLE = "bookings";


    public $conn;

    
    public function connect()
    {
        $this->conn = mysqli_connect($this->HOSTNAME, $this->USERNAME, $this->PASSWORD, $this->DB_NAME);

        return $this->conn;
    }

        // User CRUD


    public function insertusers($name, $email)
    {
        $this->connect();

        $query = "INSERT INTO users (name, email) VALUES('$name', $email, );";

        return mysqli_query($this->conn, $query);

    }

    public function fetchusers()
    {
        $this->connect();

        $query = "SELECT * FROM users;";

        $res = mysqli_query($this->conn, $query);

        return $res;
    }

    public function deleteusers($id)
    {
        $this->connect();

        $query = "DELETE FROM users WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;
    } 

    public function fetchSingleusers($id)
    {
        $this->connect();

        $query = "SELECT * FROM users WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);
        return $res;
    }

    public function updateusers($name, $email, $id)
    {
        $this->connect();

        $query = "UPDATE users SET name='$name', email=$email, course='$course' WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;
    }


}
}

    // Movie CRUD


         public function insertmovies($title,$genre,$release_date){

            $this->connect();

            $query = "INSERT INTO $this->MOVIES_TABLE(title,genre,release_date) VALUES('$title','$genre','$release_date');";

            return mysqli_query($this->conn, $query);

            
        }

        PUBlic function fetchSinglemovies($title){

            $this->connect();

            $query = "SELECT * FROM $this->MOVIES_TABLE WHERE title = $title;";

            $res = mysqli_query($this->conn, $query);

            $result = mysqli_fetch_assoc($res);
            if($result){
                return $result;
            }
            else{
                return false;
            }

        }

        public function deleteMOVIES($id)
    {
        $this->connect();

        $query = "DELETE FROM movies WHERE id=$id;";

        $res = mysqli_query($this->conn, $query);

        return $res;
    } 

            // Booking CRUD


        public function insertbookings($user_id, $movie_id, $booking_date){

            $this->connect();

            $isbookings = $this->fetchSinglebookings($user_id);

            if($isbookings){
                $query = "INSERT INTO $this->BOOKINGS_TABLE(user_id, movie_id, booking_date) VALUES('$user_id', $movie_id $booking_date);";

                return mysqli_query($this->conn, $query);

            }else{
                return false;
            } 



            public function updatebooking($user_id, $movie_id, $booking_date)
            {
                $this->connect();
        
                $query = "UPDATE boking SET user_id='$user_id', movie_id=$movie_id, course='$course' WHERE booking_date=$booking_date;";
        
                $res = mysqli_query($this->conn, $query);
        
                return $res;
            }


        }
    }

  

   


?>




