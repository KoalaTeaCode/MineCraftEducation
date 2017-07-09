{!! Form::open(array(
  'url' => '/subscribe',
  'class' => 'form',
  'method' => 'POST'
)) !!}
{{ csrf_field() }}

  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_H2UTCXDnMnLk4fenwedAlFty"
    data-amount="2000"
    data-name="Demo Site"
    data-description="2 widgets ($20.00)"
    data-image="/128x128.png"
    data-locale="auto">
  </script>
{!! Form::close() !!}
