import React, {Component} from "react";
import './ItemProduct.css';
import ictrash from '../ictrash.png';
class ItemProduct extends Component {
  constructor (props) {
    super (props);
    this.addProduct=this.addProduct.bind(this);
    this.removeProduct= this.removeProduct.bind(this);
  }
  addProduct(product){
    return <li
      key={product.key}>{product.text} <img src={ictrash} onClick={() => this.removeProduct(product.key)} /></li>

  }

  removeProduct(key){
    this.props.remove(key);
  }

  render () {
    var productAdding = this.props.adding;
    var listProducts = productAdding.map(this.addProduct);

    return (
      <div class ="card">
          <ul>
              <div class= "title">
                  <h2>Product List</h2>
              </div>

              <span>{listProducts}</span>


          </ul>
      </div>
    );
  }
}
export default ItemProduct;
