import React, { Component } from 'react';
import logo from './logo.png';
import './App.css';
import Product from './Product/Product';
import ItemProduct from './ItemProduct/ItemProduct';

class App extends Component {
  constructor(props) {
      super(props);
      this.state = {
        products:[]
      
      };
      this.addNewProduct = this.addNewProduct.bind(this);
      this.removeProduct=this.removeProduct.bind(this);
    }

//ADD NEW
  addNewProduct = (p) => {
    if (this.userInput.value!==""){
        var newItem = {
        text: this.userInput.value,
        key: Date.now()
      };

      this.setState((prevState) => {
      return {
        products: prevState.products.concat(newItem)
      };
      });
    }
    this.userInput.value="";
    console.log(this.state.products);
    p.preventDefault();
  }

//REMOVE

  removeProduct(key){
    var filteredProduct = this.state.products.filter(function(product){
    return (product.key !== key)
    });
  this.setState({
    products: filteredProduct
  });
}

//DISPLAY USER INPUT FORM

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">NDB Online Shop</h1>
        </header>
        <div class="formNewItem">
              <form onSubmit={this.addNewProduct}>
                 <label>
                      <input ref={(id)=>this.userInput = id} placeholder="Enter product"/>
                  </label>
                   <button type="submit">ADD</button>
              </form>

         </div>
         <ItemProduct adding={this.state.products}
                      remove={this.removeProduct}/>

      </div>
    );
  }



}

export default App;
