<!-- Display details of a single payment -->
<h1>Payment Details</h1>
<p>ID: {{ $payment->id }}</p>
<p>Order ID: {{ $payment->order_id }}</p>
<p>Amount: {{ $payment->amount }}</p>
<p>Payment Method: {{ $payment->payment_method }}</p>
<p>Status: {{ $payment->status }}</p>