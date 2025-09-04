set arg1=%1
set arg2=%2

rmdir %arg1%
mklink /J %arg1% %arg2%