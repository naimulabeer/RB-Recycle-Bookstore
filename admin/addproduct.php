<?php
include 'admin.php';
?>
<div class="page-content p-5" id="content">

    <div class="mx-auto" style="width: 200px;">
        <h1 style="font-size: 20px;">Add Product</h1>
    </div>


    <form method=get action=productadded.php>
        <div class="form-group col-sm-3">
            <label for="PID"></label>
            <input type="text" class="form-control" id="PID" name="PID" placeholder="Enter Product ID">
        </div>
        <div class="form-group col-md-7">
            <label for="Title"></label>
            <input type="text" class="form-control" name="Title" placeholder="Enter book Title">
        </div>
        <div class="form-group col-md-7">
            <label for="Author"></label>
            <input type="text" class="form-control" name="Author" placeholder="Enter book Author">
        </div>

        <div class="form-group col-md-3">
            <label for="MRP"></label>
            <input type="text" class="form-control" name="MRP" placeholder="Original Book Price Tk.">
        </div>

        <div class="form-group col-md-3">
            <label for="Price"></label>
            <input type="text" class="form-control" name="Price" placeholder="Price Tk.">
        </div>

        <div class="form-group col-md-3">
            <label for="Discount"></label>
            <input type="text" class="form-control" name="Discount" placeholder="Discount %">
        </div>

        <div class="form-group col-md-3">
            <label for="Available"></label>
            <input type="text" class="form-control" name="Available" placeholder="Available Books">
        </div>

        <div class="form-group col-md-8">
            <label for="Description"></label>
            <textarea rows="10" class="form-control" name="Description" placeholder="Books Description">
            </textarea>
        </div>

        <div class="form-group col-md-8">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <label class="mr-sm-2 sr-only" for="Category"></label>
                <select class="custom-select mr-md-5" name="Category" id="inlineFormCustomSelect">
                    <option selected>Book Category</option>
                    <option value="Literature">Literature</option>
                    <option value="Academic">Academic</option>
                    <option value="Recycled">Recycled</option>
                </select>
            </div>
        </div>
        </div>


        <div class="form-group col-md-2">
                <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>

</div>