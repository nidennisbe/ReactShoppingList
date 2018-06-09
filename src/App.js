import React, { Component } from 'react';
import logo from './logo.png';
import './App.css';
import ItemProduct from './Component/ItemProduct';



class App extends Component {
  constructor(props) {
    super(props);
    this.state = {
      products:[
        {id:Date.now(),text:'Apple'}
      ]
    };
    this.addNewProduct = this.addNewProduct.bind(this);
    this.removeProduct=this.removeProduct.bind(this);
    this.updateProduct=this.updateProduct.bind(this);
    this.editProduct=this.editProduct.bind(this);
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
    console.log(this.state.products);
    this.userInput.value="";
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

  //UPDATE

  updateProduct = (newInput,key) =>{
    const  index = this.state.products.findIndex((product)=>{
      return console.log(newInput);

    });

    const product = Object.assign({}, this.state.products[index]);
    product.text = this.userInput.value;
    console.log(product.text);
    const products = Object.assign({}, this.state.products);
    products[index] = product;

    this.setState({
      products:products
    });
     // let updatedProduct = [...this.state.products];
     // let index = products.findIndex(product => product.text === 'name');
     // products[index] = {...products[index], key: key};
     // this.setState({ products });

  }

   editProduct = (product,key) => {
   let arr = this.state.products;
   arr[key] = product;

   this.setState({
     text: arr
   });

console.log(arr);
  }
  //DISPLAY USER INPUT FORM

  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" />
          <h1 className="App-title">NDB Shop</h1>
        </header>
        <div className="formNewItem">
          <form onSubmit={this.addNewProduct}>
            <label>
              <input ref={(id)=>this.userInput = id} placeholder="Enter product" maxLength="14" value={this.state.text}/>
            </label>
            <button type="submit">ADD</button>
          </form>

        </div>
        <ItemProduct {...this.state}
          edit={this.editProduct}
          adding={this.state.products}
          remove={this.removeProduct}
          update={this.updateProduct}/>
      </div>
    );
  }
}

export default App;
