 <div class="row">
    <div class="span8 offset1">
        <h2>Stock</h2>
        <table id='stockTable'>
            <tr>
                <th>Code</th>
                <th>Description</th>
                <th>Selling Price</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            {stock}
            <tr>
                <td>{code}</td>
                <td>{description}</td>
                <td>{sellingPrice}</td>
                <td>{quantity}</td>
                <td></td>
                <td></td>
            </tr>
            {/stock}
            <a>Add</a>
        </table>
        <h2>Recipes</h2>
        <table id ='recipesTable'>
            <tr>
                <th>Name</th>
                <th>Ingredients</th>
            </tr>
            {recipes}
            <tr>
                <td>{code}</td>
                <td>
                    <table>
                        <tr>
                            <th>Ingredient Name</th>
                            <th>Amount</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>    
                        {ingredients}
                        <tr>
                            <td>{name}</td>
                            <td>{amount}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        {/ingredients}
                        <a>Add</a>
                    </table>
                </td>
            </tr>
            {/recipes}
        </table>
        <h2>Supplies</h2>
        <table id = 'suppliesTable'>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Receiving Unit</th>
                <th>Receiving Cost</th>
                <th>Stocking Unit</th>
                <th>Quantity</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            {supplies}
            <tr>
                <td>{code}</td>
                <td>{description}</td>
                <td>{receivingUnit}</td>
                <td>{receivingCost}</td>
                <td>{stockingUnit}</td>
                <td>{quantity}</td>
                <td></td>
                <td></td>
            </tr>
            {/supplies}
            <a>Add</a>
        </table>
    </div>
</div>