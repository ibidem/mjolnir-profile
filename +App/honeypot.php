<?php namespace app;

// This is an IDE honeypot. It tells IDEs the class hirarchy, but otherwise has
// no effect on your application. :)

// HowTo: order honeypot -n 'mjolnir\profile'

class Application extends \mjolnir\profile\Application { /** @return \mjolnir\profile\Application */ static function instance() { return parent::instance(); } }
