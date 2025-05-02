@php use App\Models\Product; @endphp
<form action="" method="post" accept-charset="utf-8"
      class="form-horizontal form-input-box pl-5 pr-5">
    <div class="row">
        <div class="col-sm-4 mb-4">
            <div class="form-group"><input type="text"
                                           placeholder="Name *"
                                           name="name"
                                           value=""
                                           class="form-control"
                                           id="name"
                                           required="">
                <span class="text-danger"></span></div>
        </div>

        <div class="col-sm-4 ">
            <div class="form-group">
                <input type="text"
                       placeholder="Email *"
                       name="email2"
                       value=""
                       class="form-control"
                       id="email2"
                       required=""> <span
                    class="text-danger"></span></div>
        </div>
        <div class="col-sm-4 mb-4">
            <div class="form-group">
                <input
                    placeholder="Phone Number" type="text" name="phone" value="" class="form-control" id="phone"
                    required=""> <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4  col-sm-4 padding-left-17">
            <div class="form-group">
                <select
                    name="stock" class="form-control" required="">
                    <option value="">Stock</option>
                    <option value="12pt Cardboard Stock">12pt Cardboard Stock</option>
                    <option value="14pt Cardboard Stock">14pt Cardboard Stock</option>
                    <option value="16pt Cardboard Stock">16pt Cardboard Stock</option>
                    <option value="18pt Cardboard Stock">18pt Cardboard Stock</option>
                    <option value="20pt Cardboard Stock">20pt Cardboard Stock</option>
                    <option value="22pt Cardboard Stock">22pt Cardboard Stock</option>
                    <option value="24pt Cardboard Stock">24pt Cardboard Stock</option>
                    <option value="Kraft Stock">Kraft Stock</option>
                    <option value="Recycled BuxBoard">Recycled BuxBoard</option>
                    <option value="Corrugated Stock">Corrugated Stock</option>
                    <option value="No Printing Required">No Printing Required</option>
                </select>
            </div>
        </div>
        <div class="col-sm-4 mb-4" >
            <div class="form-group">

                <select
                    name="stock" class="form-control" required="">
                    <option value="">Select A Product</option>
                    @foreach(Product::all() as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach

                </select>
                <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="form-group">
                <select
                    name="color" class="form-control" required="">
                    <option value="">Select Color</option>
                    <option value="None">None</option>
                    <option value="1 Colour">1 Colour</option>
                    <option value="2 Colour">2 Colour</option>
                    <option value="3 Colour">3 Colour</option>
                    <option value="4 Colour">4 Colour</option>
                    <option value="4/1 Colour">4/1 Colour</option>
                    <option value="4/2 Colour">4/2 Colour</option>
                    <option value="4/3 Colour">4/3 Colour</option>
                    <option value="4/4 Colour">4/4 Colour</option>
                </select> <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4 mb-4 col-sm-4 ">
            <div class="form-group">
                <input type="text"
                       placeholder="Size Length"
                       name="size_length"
                       value=""
                       class="form-control"
                       id="size_length"
                       required="">
                <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4 col-sm-4 padding-left-17">
            <div class="form-group"><input
                    placeholder="Size Width" type="text" name="size_width" value="" class="form-control" id="size_width"
                    required=""> <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4">
            <div class="form-group"><input
                    placeholder="Size Height" type="text" name="size_height" value="" class="form-control"
                    id="size_height" required=""> <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4 mb-4 padding-left-17">
            <div class="form-group"><select
                    name="size_unit" class="form-control" required="">
                    <option value="">Select Size Unit</option>
                    <option value="Inches">Inches</option>
                    <option value="cm">cm</option>
                    <option value="mm">mm</option>
                </select> <span class="text-danger"></span></div>
        </div>
        <div class="col-md-4">
            <div class="form-group"><input placeholder="Qty1"
                                           type="text"
                                           name="size_qty1"
                                           value=""
                                           class="form-control"
                                           id="size_qty1"
                                           required=""> <span
                    class="text-danger"></span></div>
        </div>
        <div class="col-md-4 padding-left-17">
            <div class="form-group"><input placeholder="QTY2"
                                           type="text"
                                           name="size_qty2"
                                           value=""
                                           class="form-control"
                                           id="size_qty2"
                                           required=""> <span
                    class="text-danger"></span></div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group"> <textarea
                placeholder="Comment" type="text" name="comments" class="form-control textarea" id="comments"
                required=""> </textarea> <span class="text-danger"></span></div>
    </div>
    <div class="form-group">
        <div class="text-center col-sm-12">
            <button type="submit" class="btn btn-product btn-primary pl-2 pr-2 w-100 pt-2 pb-2 mt-2 mb-2 btn-cart"> Get
                Quote
            </button>
        </div>
    </div>
</form>
