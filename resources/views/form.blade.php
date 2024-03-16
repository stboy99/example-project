<div class="container container-form">
    <div class="row">
        <div class="col-6">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{isset($model) && $model->name ? $model->name : ''}}" placeholder="please enter name">
        </div>
        <div class="col-6">
            <label for="price">Price (RM)</label>
            <input type="decimal" name="price" value="{{isset($model) && $model->price ? $model->price : ''}}" placeholder="please enter price">
        </div>
        <div class="col-6">
            <label for="detail">detail</label>
            <input type="text" name="detail" value="{{isset($model) && $model->detail ? $model->name : ''}}" placeholder="please enter detail">
        </div>
        <div class="col-6">
            <label for="publish">Publish</label>
            <select name="publish" id="">
                <option value="1" {{isset($model) && $model->publish == 1 ? 'selected' : ''}}>yes</option>
                <option value="0" {{isset($model) && $model->publish == 0 ? 'selected' : ''}}>no</option>
            </select>
        </div>
        <div class="col-12">
            <button type="submit">Submit</button>
        </div>
    </div>
</div>