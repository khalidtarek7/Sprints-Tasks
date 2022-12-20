import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
export class ColorService {

  constructor() { }

  getColors() {
    return ['white', 'black', 'blue', 'red', 'green']
  }
}
