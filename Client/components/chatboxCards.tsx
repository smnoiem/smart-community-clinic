"use client"

import { Button } from "@/components/ui/button"
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Textarea } from "@/components/ui/textarea"

function ChatBoxCards() {
  return (
    <div className="container h-screen w-1/2">
      <Card className="w-full h-full">
        <CardContent className="flex flex-col">
          <div className="pb-5">
            <Card className="w-full h-full">
              <CardHeader>
                <CardTitle>Medical History</CardTitle>
                <CardDescription>
                  Deploy your medical history to the world with a single click.
                </CardDescription>
              </CardHeader>
              <CardContent className="flex justify-between"></CardContent>
            </Card>
          </div>

          <Card className="w-full h-full">
            <CardHeader>
              <CardTitle className="text-center">Prescription</CardTitle>
            </CardHeader>
            <CardContent className="flex flex-col">
              <div className="grid w-full gap-2">
                <Textarea
                  placeholder="New prescription"
                  className="h-[300px] pb-2"
                />
                <Button>Save</Button>
              </div>
            </CardContent>
          </Card>
        </CardContent>
      </Card>
    </div>
  )
}

export default ChatBoxCards
