<?php
echo form_open('welcome3/send');
echo form_label('What is your Name : ');
echo form_input('username');
echo br(1);
echo form_label('What is your E-Maial : ');
$dataemail = array(
    'type' => 'email',
    'name' => 'myemail',
    'size' => '30',
    'required' => 'required',
);

echo form_input($dataemail);
echo form_submit('','Submit Post!');
echo form_close();
?>