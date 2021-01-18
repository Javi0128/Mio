import { Component, OnInit } from '@angular/core';
import { BOOKS } from './data/mock-books';
import { Book } from './model/book';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit{
  
  bookList: Book[] = [];

  pathImg : string = './assets/img/';

  selectedBook: Book;

  ngOnInit(): void{

  //Obtenemos los libros en nuestra variable
    this.bookList = BOOKS;

  }

  setSelectedBook(aBook: Book): void{

    this.selectedBook = aBook;

  }
  
  receiveBook( event ) : void{

    const miLibro: Book = event;

    console.log( miLibro );
    this.deleteBook(miLibro.isbn);

  }

  deleteBook(isbn:number) : void{

    this.selectedBook = null;
    this.bookList = this.bookList.filter(book => book.isbn !== isbn);

  }

  borraFiltro() : void{

    this.selectedBook = null;
    this.bookList = BOOKS; 

  }

}
