<?php

// Define colors
$red     = "\033[1;31m";
$green   = "\033[1;32m";
$blue    = "\033[1;34m";
$pink    = "\033[1;35m";
$bluesky = "\033[1;36m";
$white   = "\033[1;37m";
$yellow  = "\033[1;33m";

system('clear');

$banner2 = $green . "Updating default packages \n\n";
echo $banner2;
system('apt update && apt upgrade -y');

echo $green . "Requesting access to storage\n";
sleep(2);
echo $green . "Allow Storage Permission!\n";
sleep(2);
system('termux-setup-storage');
sleep(5);
system('clear');

echo $bluesky . "Installing python\n";
system('pkg install python -y');

echo $blue . "Installing yt-dlp (better than youtube-dl)\n";
system('pip install -U yt-dlp');

echo $green . "Making the Youtube Directory to download the Videos\n";
system('mkdir -p ~/storage/shared/Youtube');

echo $green . "Creating yt-dlp folder for config\n";
system('mkdir -p ~/.config/yt-dlp');

echo $white . "Creating bin folder\n";
system('mkdir -p ~/bin');

echo $white . "Creating Termux-URL-Opener FILE.\n";
system('mv termux-url-opener ~/bin/');
system('clear');

echo "\n";
echo $green . "Process Complete!\n";
echo $red . "Now you can share any Youtube video with Termux\n";
echo $white . "[{$green}+{$white}] ==========[{$yellow}SCRIPT BY AZER{$white}]======>\n";

