#!/bin/bash
count=1
echo "Сколько полос конвертировать?"
read count
for (( page = 1; page <= $count; page++ ))
do
inkscape $1 --pdf-page=$page -l --export-filename=$page.svg
sed -i -e '1d' $page.svg
echo -en "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?>\n<?xml-stylesheet type=\"text/css\" href=\"main.css\" ?>\n" > temp
cat $page.svg >> temp
mv temp $page.svg
rm $page.svg-e
echo "$page done"
done