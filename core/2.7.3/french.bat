@echo off
setlocal enabledelayedexpansion

echo Starting folder and file rename process...
echo Replacing "english" with "french" in all folder and file names...

rem Process folders first (bottom-up to avoid path issues)
for /f "delims=" %%a in ('dir /b /s /ad ^| sort /r') do (
    set "folderpath=%%a"
    set "foldername=%%~nxa"
    
    if "!foldername!"=="!foldername:english=!" (
        rem Folder name doesn't contain "english", skip
    ) else (
        set "newfoldername=!foldername:english=french!"
        set "parentpath=%%~dpa"
        set "parentpath=!parentpath:~0,-1!"
        
        echo Renaming folder: "!folderpath!" to "!parentpath!\!newfoldername!"
        ren "!folderpath!" "!newfoldername!"
    )
)

rem Process files now
for /f "delims=" %%a in ('dir /b /s /a-d') do (
    set "filepath=%%a"
    set "filename=%%~nxa"
    
    if "!filename!"=="!filename:english=!" (
        rem File name doesn't contain "english", skip
    ) else (
        set "newfilename=!filename:english=french!"
        set "parentpath=%%~dpa"
        
        echo Renaming file: "!filepath!" to "!parentpath!!newfilename!"
        ren "!filepath!" "!newfilename!"
    )
)

echo Rename process completed.
pause
