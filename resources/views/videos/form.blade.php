
<div class="row">
  <div class="col-md-6">
    {{ csrf_field() }}

    <div class="form-group">
      <label for="title">Title:</label>
      {!! Form::text('title', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="description">Description:</label>
      {!! Form::textarea('description', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="link">Link:</label>
      {!! Form::text('link', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="category">Category:</label>
      {!! Form::text('category', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="subject">Subject:</label>
      {!! Form::text('subject', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="certification_credit">Certification Credit:</label>
      {!! Form::text('certification_credit', null, array('class' => 'form-control')); !!}
    </div>

    <div class="form-group">
      <label for="written_content">Written Content:</label>
      {!! Form::textarea('written_content', null, array('class' => 'form-control')); !!}
    </div>

    <hr>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</div>
