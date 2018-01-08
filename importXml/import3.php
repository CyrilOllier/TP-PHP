<?php
// import 2 table + table jointure avec champ UNIQUE en DB
sleep(3);
$output = '';
         
if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != '') {
             
    $valid_extension = array('xml');
    $file_data = explode('.', $_FILES['file']['name']);
    $file_extension = end($file_data);
             
    if( in_array( $file_extension, $valid_extension ) ) {
        $data = simplexml_load_file($_FILES['file']['tmp_name']);
        $connect = new PDO(
            'mysql:host=localhost;dbname=membre',
            'root',
            '',
            array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
        );
         
        $insertLivre = $connect->prepare( "
            INSERT INTO book (title, overview, availability, publisher, publication_date, price)
            VALUES(:title, :overview, :availability, :publisher, :publication_date, :price);"
        );
         
        $selectLivre = $connect->prepare( "
            SELECT id_book
            FROM book
            WHERE title = :title"
        );
         
        $insertAuthor = $connect->prepare( "
            INSERT INTO author (firstname, lastname, birth_year, native_country)
            VALUES(:firstname, :lastname, :birth_year, :native_country);"
        );
         
        $selectAuthor = $connect->prepare( "
            SELECT id_author
            FROM INTO author
            WHERE
                firstname = :firstname
                AND lastname = :lastname;"
        );
         
        $insertRelation = $connect->prepare( "
            INSERT INTO authors_books
            VALUES(:author, :book);"
        );
         
        foreach( $data as $book ) {
            try {
                $insertLivre->execute( array(
                    ':title' => $book->title,
                    ':overview' => $book->overview,
                    ':availability' => $book->availability,
                    ':publisher' => $book->publisher,
                    ':publication_date' => $book->publication_date,
                    ':price' => $book->price
                ));
                $idLivre = $connect->lastInsertId();
            }
            catch( Exception $e ) {
                if( $e->getCode() == 23000 ) {
                    $requete = $selectLivre->execute( array(
                        ':title' => $book->title
                    ));
                    $idLivre = $requete->fetchColumn();
                    $requete->closeCursor();
                } else {
                    $output .= '<div class="alert alert-danger">Book insert error : '.$e->getMessage().'</div>';
                }
            }
             
            try {
                $insertAuthor->execute( array(
                    ':firstname' => $book->author->firstname,
                    ':lastname' => $book->author->lastname,
                    ':birth_year' => $book->author->birth_year,
                    ':native_country' => $book->author->native_country
                ));
                $idAuteur = $connect->lastInsertId();
            }
            catch( Exception $e ) {
                if( $e->getCode() == 23000 ) {
                    $requete = $selectAuthor->execute( array(
                        ':firstname' => $book->author->firstname,
                        ':lastname' => $book->author->lastname,
                    ));
                    $idAuteur = $requete->fetchColumn();
                    $requete->closeCursor();
                } else {
                    $output .= '<div class="alert alert-danger">Author insert error : '.$e->getMessage().'</div>';
                }
            }
             
            try {
                $insertRelation->execute( array(
                    ':author' => $idAuteur,
                    ':book' => $idLivre
                ));
                 
                $output = '<div class="alert alert-success">Import Data Done</div>';
            }
            catch( Exception $e ) {
                if( $e->getCode() == 23000 ) {
                    $requete = $selectAuthor->execute( array(
                        ':firstname' => $book->author->firstname,
                        ':lastname' => $book->author->lastname,
                    ));
                    $idAuteur = $requete->fetchColumn();
                    $requete->closeCursor();
                } else {
                    $output .= '<div class="alert alert-danger">Relation insert error : '.$e->getMessage().'</div>';
                }
            }
        }
    } else {
        $output = '<div class="alert alert-warning">Invalid File</div>';
    }
} else {
    $output = '<div class="alert alert-warning">Please Select XML File</div>';
}
echo $output;
?>