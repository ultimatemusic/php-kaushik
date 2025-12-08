Explain the differences between sessions and cookies in PHP

Sessions vs. Cookies in PHP:

1. Storage Location:
   - Sessions store data on the server.
   - Cookies store data on the user's browser (client-side).

2. Security:
   - Sessions are generally more secure because sensitive data is not exposed to the client.
   - Cookies can be viewed and modified by the user, making them less secure for sensitive information.

3. Lifetime:
   - Session data lasts until the user closes the browser or the session expires on the server.
   - Cookies can have a set expiration time and may persist even after the browser is closed.

4. Usage:
   - Sessions are used for storing temporary data like user authentication status.
   - Cookies are used for storing small pieces of data like user preferences or tracking information.
