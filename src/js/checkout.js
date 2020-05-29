<script src="https://www.paypal.com/sdk/js?client-id=SB_CLIENT_ID"></script>

<div id="paypal-button-container"></div>

<script>
  paypal.Buttons({
    createOrder: function (data, actions) {
      return fetch('/my-server/create-order', {
        method: 'POST'
      }).then(function(res) {
        return res.json();
      }).then(function(data) {
        return data.id;
      });
    },
    onApprove: function (data, actions) {
      return fetch('/my-server/capture-order/' + data.orderID, {
        method: 'POST'
      }).then(function(res) {
        if (!res.ok) {
          alert('Something went wrong');
        }
      });
    }
  }).render('#paypal-button-container');

  )
  createOrder() {


  }
  onApprove() {

  }
  

</script>