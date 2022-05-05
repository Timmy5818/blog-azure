param($appname, $type, $version, $url, $url64)


Write-Host "this is script2"
Write-Host "$appname, $type, $version, $url, $url64"

[Security.Principal.WindowsIdentity]::GetCurrent().Groups -contains 'S-1-5-32-544'

pause
