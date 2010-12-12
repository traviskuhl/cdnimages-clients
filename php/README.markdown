cdnimag.es PHP Client
=========
A PHP wrapper client for the cdnimages API.

See the full list of [API Client Methods][https://github.com/traviskuhl/cdnimages-clients]


REQUIREMENTS
--------
* PHP 5.2 or greater
* [JSON Extension][http://us.php.net/manual/en/json.installation.php] 

USAGE
--------
`
// setup
CdnImages::setup(array(
	"domain"	=> $config['domain'],
	"key"		=> $config['key'],
	"secret"	=> $config['secret'],
	"cname"		=> $config['cname'],
	"api"		=> $config['api']
));
`

LICENSE
--------

The MIT License

Copyright (c) 2010 Travis Kuhl <travis@kuhl.co>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.