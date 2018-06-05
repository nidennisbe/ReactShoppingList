import React, { Component } from 'react';
import logo from './logo.png';
import './App.css';
import Product from './Product/Product';

class App extends Component {

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">Welcome to Nidennis React Shopping List</h1>
        </header>
      <Product />
      <div class="formNewItem">
       <button onClick={this.addItem}>OK</button>
       </div>
      </div>
    );
  }

  addItem = () =>{
    console.log('Added item');
  }

}


export default App;
//
//
// function Form(){
//   return (
//
//   );
// }
// ReactDOM.render(<Form/> title="Title" qty="Quantity"/>,document.quarySelector('#formNewItem'));
