<?php
	require_once("model/Book.php");
	
	class Model {
		public function getBookList() {
			// here goes some hardcoded values to simulate the database
			return array(
				"Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
				"Moonwalker" => new Book("Moonwalker", "J. Walker", "Simple Java Book for students"),
				"PHP for Dummies" => new Book("PHP for Dummies", "Smart Guy", "My favorite book."),
				"The Great Gatsby" => new Book("The Great Gatsby", "F. Scott Fitzgerald", "Classic novel set in the Roaring Twenties"),
				"To Kill a Mockingbird" => new Book("To Kill a Mockingbird", "Harper Lee", "Pulitzer Prize-winning novel addressing racial injustice"),
				"Totalitarianism" => new Book("Totalitarianism", "George Orwell", "Dystopian fiction exploring totalitarianism"),
				"Pride and Prejudice" => new Book("Pride and Prejudice", "Jane Austen", "Romantic novel with social commentary"),
				"The Catcher in the Rye" => new Book("The Catcher in the Rye", "J.D. Salinger", "Coming-of-age story of a teenager in New York City"),
				"The Hobbit" => new Book("The Hobbit", "J.R.R. Tolkien", "Fantasy adventure novel featuring Bilbo Baggins"),
				"The Da Vinci Code" => new Book("The Da Vinci Code", "Dan Brown", "Mystery thriller involving a symbologist"),
				"Harry Potter series" => new Book("Harry Potter series", "J.K. Rowling", "Fantasy series following the life of Harry Potter"),
				"The Alchemist" => new Book("The Alchemist", "Paulo Coelho", "Philosophical novel about personal legend and destiny"),
				"The Hunger Games" => new Book("The Hunger Games", "Suzanne Collins", "Dystopian trilogy set in a post-apocalyptic world")
			);
		}
		
		public function getBook($title) {
			// we use the previous function to get all the books and then 
			// we return the requested one.
			// in a real life scenario this will be done through a db select command
			$allBooks = $this->getBookList();  
			return $allBooks[$title];
		}
	}
?>