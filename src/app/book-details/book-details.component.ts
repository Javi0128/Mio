import { Component, EventEmitter, Input, OnInit, Output } from '@angular/core';
import { Book } from '../model/book';

@Component({
  selector: 'app-book-details',
  templateUrl: './book-details.component.html',
  styleUrls: ['./book-details.component.scss']
})
export class BookDetailsComponent implements OnInit {

  @Input('miLibrito') book: Book;
  pathImg : string = './assets/img/';

  @Output() delete = new EventEmitter<Book>(null); //Mandamos el libro a borrar

  constructor() { }

  ngOnInit(): void {
  }

  sendBookToDelete(): void{

    // envía el libro al otro componente
    this.delete.emit( this.book );

  }

}
