<div class="card-body row">
    <div class="form-group  col-6">
        <label>عنوان المشروع<span
                class="text-danger">*</span></label>
        <input name="name" placeholder="ادخل عنوان المشروع" value="{{ old('name', $data->name ?? '') }}"
               class="form-control  {{ $errors->has('name') ? 'border-danger' : '' }}" type="text"
               maxlength="255"/>
    </div>
    <div class="form-group  col-6">
        <label>سعر المشروع<span
                class="text-danger">*</span></label>
        <input name="price" placeholder="ادخل سعر المشروع" value="{{ old('price', $data->price ?? '') }}"
               class="form-control  {{ $errors->has('price') ? 'border-danger' : '' }}" type="number"
               maxlength="255"/>
    </div>
    <div class="form-group col-4">
        <label>القسم</label>
        <select name="category_id"
                class="form-control form-control-solid form-control-lg">
            @foreach($Category as $row)
                <option
                    @if(Request::segment(1)== 'projects' && Request::segment(2)== 'edit')
                    {{ $row->id == old('category_id',  $data->category_id)  ? 'selected' : '' }}
                    @else
                    {{ $row->id == old('category_id') ? 'selected' : '' }}
                    @endif
                    value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-4">
        <label>المساحه</label>
        <select name="area_id"
                class="form-control form-control-solid form-control-lg">
            @foreach($Area as $row)
                <option
                    @if(Request::segment(1)== 'projects' && Request::segment(2)== 'edit')
                    {{ $row->id == old('area_id',  $data->area_id)  ? 'selected' : '' }}
                    @else
                    {{ $row->id == old('area_id') ? 'selected' : '' }}
                    @endif
                    value="{{ $row->id }}">{{ $row->area }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-4">
        <label>المنطقه</label>
        <select name="location_id"
                class="form-control form-control-solid form-control-lg">
            @foreach($Location as $row)
                <option
                    @if(Request::segment(1)== 'projects' && Request::segment(2)== 'edit')
                    {{ $row->id == old('location_id',  $data->location_id)  ? 'selected' : '' }}
                    @else
                    {{ $row->id == old('location_id') ? 'selected' : '' }}
                    @endif
                    value="{{ $row->id }}">{{ $row->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-12">
        <label>وصف المميزات<span
                class="text-danger">*</span></label>
        <div class="">
                <textarea class="form-control {{ $errors->has('feature') ? 'border-danger' : '' }} "
                          placeholder="ادخل المميزات"      name="feature" rows="5" >{{ old('feature', $data->feature ?? '') }}</textarea>
        </div>
    </div>
    <div class="form-group col-12">
        <label>وصف الملحوظات<span
                class="text-danger">*</span></label>
        <div class="">
                <textarea class="form-control {{ $errors->has('description') ? 'border-danger' : '' }} "
                          placeholder="ادخل الملحوظات"      name="description" rows="5" >{{ old('description', $data->description ?? '') }}</textarea>
        </div>
    </div>
    <div class="form-group col-md-6">
        <label>صورة المشروع<span
                class="text-danger">*</span></label>
        <div class="col-lg-8">

            <div class="image-input image-input-outline" id="kt_image_1">
                <div class="image-input-wrapper {{ $errors->has('image') ? 'border-danger' : '' }}"
                     style="background-image: url({{old('image', $data->image ?? 'default-image.png' )}})"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                       data-action="change" data-toggle="tooltip" title=""
                       data-original-title="اختر صوره">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" value="{{old('image', $data->image ?? '')}}" name="image"
                           accept=".png, .jpg, .jpeg"/>
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-warning btn-shadow"
                      data-action="cancel" data-toggle="tooltip" title="Cancel avatar">

                      <i class="ki ki-bold-close icon-xs text-muted"></i>
                     </span>
            </div>
        </div>
    </div>

</div>
<div class="card-footer text-left">
    <button type="Submit" id="submit" class="btn btn-warning btn-default ">حفظ</button>
    <a href="{{ URL::previous() }}" class="btn btn-secondary">الغاء</a>
</div>

