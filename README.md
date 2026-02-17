# sqli-lab
based on this
<html>
  <img src="https://raw.githubusercontent.com/febnug/sqli-lab/refs/heads/main/sqli.jpeg" width="450px" height="450px"/>
  <h3>Build & Run</h3>
  <p><pre>
docker compose up --build -d </pre>
  </p>
  <h3>Contoh payload</h3>
  <p><pre>?id=1' UNION SELECT 999,'hacker','pwned' -- -</pre></p>
</html>
