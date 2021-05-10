import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-home',
  templateUrl: './home.component.html',
  styleUrls: ['./home.component.css']
})
export class HomeComponent implements OnInit {
  public name = 'Boss';

  public age = 15;

  public vehicles = ['Toyota', 'Hyundai', 'Honda', 'Lambogini', 'Mitsubishi'];

  constructor() { }

  ngOnInit(): void {
  }

}
