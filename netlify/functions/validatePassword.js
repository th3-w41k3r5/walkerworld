// netlify/functions/validatePassword.js
exports.handler = async (event, context) => {
    const { password } = JSON.parse(event.body);
    const storedPassword = process.env.PASSWORD;

    if (password === storedPassword) {
        return {
            statusCode: 200,
            body: JSON.stringify({ valid: true })
        };
    } else {
        return {
            statusCode: 401,
            body: JSON.stringify({ valid: false })
        };
    }
};
