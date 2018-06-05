import React from 'react';

const product =() =>{
  return (
     <div class="formNewItem">
           <form>
              <label>
                   Product Name:
                   <input type="text" name="name" />
               </label>
              <label>
                   Quantity:
                   <input type="text" name="quantity" />
               </label>
                   <input type="submit" value="Add" />
           </form>
         </div>
       )
};

export default product;
