<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">
        <html>
            <body>
                <h2>My CD Collection</h2>
                <table border="1">
                    <tr bgcolor="#7FFFD4">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>ID</th>
                        <th>Faculty</th>
                        <th>Dept</th>
                        <th>Province</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                    <xsl:for-each select="student/cd">
                        <tr>
                            <td>
                                <xsl:value-of select="FirstName" />
                            </td>
                            <td>
                                <xsl:value-of select="LastName" />
                            </td>
                            <td>
                                <xsl:value-of select="ID" />
                            </td>
                            <td>
                                <xsl:value-of select="Faculty" />
                            </td>
                            <td>
                                <xsl:value-of select="Dept" />
                            </td>
                            <td>
                                <xsl:value-of select="Province" />
                            </td>
                            <td>
                                <xsl:value-of select="Email" />
                            </td>
                            <td>
                                <xsl:value-of select="Phone" />
                            </td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>