update-index:
	lftp -e 'put index.html; bye' -u ebsinfo tommy.heliohost.org/public_html/humkay.com/

update-gallery:
	lftp -e 'mirror -nR gallery ./; bye' -u ebsinfo tommy.heliohost.org/public_html/humkay.com/

process-files:
	mogrify -strip -interlace Plane -sampling-factor 4:2:0 -define jpeg:dct-method=float -quality 85% *.jpg
