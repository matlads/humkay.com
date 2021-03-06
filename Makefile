all: update-application

update-index:
	lftp -e 'put index.html; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

update-application:
	lftp -e 'mirror -nR application ./; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

update-gallery:
	lftp -e 'mirror -nR gallery ./; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

update-img:
	lftp -e 'mirror -nR img ./; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

update-css:
	lftp -e 'mirror -nR css ./; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

update-doc:
	lftp -e 'mkdir doc; mirror -nR doc ./; bye' -u ebs tommy.heliohost.org/public_html/humkay.com/

process-files:
	mogrify -strip -interlace Plane -sampling-factor 4:2:0 -define jpeg:dct-method=float -quality 85% *.jpg

server:
	php -S 0:8000
