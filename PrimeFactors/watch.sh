while true;  do 
    sleep 1;
    fswatch -o . | xargs -n1 -I{} phpunit --colors
done;    
